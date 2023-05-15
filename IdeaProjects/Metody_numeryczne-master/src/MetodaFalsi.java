import java.util.function.DoubleFunction;

public class MetodaFalsi {
    static int licznik = 0;
    private static final double DX = 0.0001;

    private static DoubleFunction<Double> derive(DoubleFunction<Double> f) {
        return (x) -> (f.apply(x + DX) - f.apply(x)) / DX;
    }

    public static void falsi(double a, double b, double epsil, DoubleFunction<Double> rownanie) {
        if (func(rownanie, a) * func(rownanie, b) >= 0) {
            throw new IllegalArgumentException("Wartosci na koncach przedzialu sa takie same!");
        }
        DoubleFunction<Double> f1 = derive(rownanie);
        DoubleFunction<Double> f2 = derive(f1);

        double c = a;
        if (func(f1, a) * func(f2, a) >= 0) {
            c = a;
        }
        if (func(f1, b) * func(f2, b) >= 0) {
            c = b;
        }

        if (func(f1, b) * func(f2, b) >= 0 && func(f1, a) * func(f2, a) >= 0) {
            if (func(rownanie, a) * func(f2, a) >= 0) {
                c = a;
            }
            if (func(rownanie, b) * func(f2, b) >= 0) {
                c = b;
            }
        }
        double x;
        if (c == b)
            x = a;
        else x = b;
        while (Math.abs(func(rownanie, x)) >= epsil) {
            x = x - (func(rownanie, x) * (c - x)) / (func(rownanie, c) - func(rownanie, x));
            licznik++;
        }
        System.out.println("x" + licznik + " = " + x);
    }
    static double func(DoubleFunction<Double> f, double x) {
        return (f.apply(x));
    }

    public static void main(String[] args) {
        DoubleFunction<Double> cube = (x) -> (x + 1) * (Math.pow((x - 1), 4));
        double a = -1.5;
        double b = -0.75;
        double epsilon = 0.01;
        falsi(a, b, epsilon, cube);
    }
}