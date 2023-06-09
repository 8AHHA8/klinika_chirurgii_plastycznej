<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Surgery;
use App\Models\Transaction;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ProfileController extends Controller
{
    public function edit(Request $request): View
    {
        $user = $request->user();
        $role = $user->role;

        if ($role === 1) {
            $transactions = DB::table('transactions')
                ->join('users', 'transactions.user_id', '=', 'users.id')
                ->join('surgeries', 'transactions.surgery_id', '=', 'surgeries.id')
                ->leftJoin('doctors', 'transactions.doctor_id', '=', 'doctors.id')
                ->select('transactions.id', 'transactions.doctor_id', 'transactions.date', 'transactions.price', 'surgeries.name AS surgery_name', 'users.name', 'users.surname', 'users.phone_number', 'users.email As email', 'users.pesel')
                ->orderBy('transactions.id', 'asc')
                ->get();

            $transactionCollection = collect($transactions);
            $sortedTransactions = $transactionCollection->sortByDesc('date');

            $perPage = 10;

            $paginatedTransactions = new LengthAwarePaginator(
                $sortedTransactions->forPage($request->page, $perPage),
                $sortedTransactions->count(),
                $perPage,
                $request->page,
                ['path' => $request->url()]
            );

            $surgeries = Surgery::all();

            return view('profile.edit-role1', [
                'user' => $user,
                'transactions' => $paginatedTransactions,
                'surgeries' => $surgeries,
            ]);
        }elseif ($role === 2) {
            return view('profile.edit-role2', [
                'user' => $user,
            ]);
        } else {
            return redirect()->back()->withErrors('Invalid user role.');
        }
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse // Update the user's profile information.
    {
        $user = $request->user();
        $role = $user->role;

        $user->fill($request->validated());

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        if ($role === 1) {
            return Redirect::route('profile.edit')->with('status', 'profile-updated');
        } elseif ($role === 2) {
            return Redirect::route('profile.edit')->with('status', 'profile-updated');
        } else {
            return redirect()->back()->withErrors('Invalid user role.'); // Wrong role
        }
    }


    public function destroy(Request $request): RedirectResponse // Delete the user's account.

    {
        $request->validate([
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();
        $role = $user->role;

        Auth::logout();

        DB::beginTransaction();

        try {

            DB::table('transactions')->where('user_id', $user->id)->delete();

            $user->delete(); //Delete user

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();

            throw $e;
        }

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        if ($role === 1) {
            return Redirect::to('/')->with('status', 'account-deleted-role1');
        } elseif ($role === 2) {
            return Redirect::to('/')->with('status', 'account-deleted-role2');
        } else {
            return redirect()->to('/')->withErrors('Invalid user role.'); // Wrong role
        }
    }

}
