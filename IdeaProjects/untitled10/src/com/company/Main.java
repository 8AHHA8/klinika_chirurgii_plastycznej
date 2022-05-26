package com.company;

public class Main {

    public static void main(String[] args) {
        Labirynt lab1 = new Labirynt();
        lab1.piszPlansza();
        lab1.szukaj();
        lab1.piszPlansza();
        System.out.println("wyjscie z labirytnu najszybsza trasa");
    }
}