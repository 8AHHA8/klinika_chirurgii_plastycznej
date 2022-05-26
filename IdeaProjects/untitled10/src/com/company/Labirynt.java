package com.company;

public class Labirynt {

    char [][] plansza =
            {
                    {'1','1','1','1','1','1','1','1','1','1','1','1','1','1','1'},
                    {'1','0','0','0','0','1','1','0','0','0','0','0','0','1','1'},
                    {'1','1','1','1','0','1','1','0','1','1','1','1','0','1','1'},
                    {'1','0','0','0','0','0','0','0','1','1','1','1','0','1','1'},
                    {'1','0','1','0','1','1','1','0','0','0','1','1','0','1','1'},
                    {'0','0','1','0','1','1','1','1','1','1','1','1','0','1','1'},
                    {'1','1','1','0','1','0','1','1','0','0','0','0','0','0','1'},
                    {'1','0','0','0','0','0','1','1','0','1','1','1','1','0','1'},
                    {'1','0','1','1','1','0','1','1','0','1','0','0','0','0','1'},
                    {'1','1','1','1','1','1','1','1','0','1','1','1','1','1','1'}

            };

    boolean [][] odwiedzone; int lWierszy,lKolumn;

    public Labirynt()
    {
        this.lWierszy = plansza.length;
        this.lKolumn = plansza[0].length;
        odwiedzone = new boolean[lWierszy][lKolumn];

        for (int i=0; i<lWierszy; i++)
            for (int j=0; j<lKolumn; j++)
                odwiedzone[i][j] = false;
    }

    void piszPlansza()
    {
        System.out.println("-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=");
        for (int i=0; i<plansza.length; i++)
        {
            String text = "";
            for (int j=0; j<plansza[0].length; j++) {
                if (plansza[i][j]=='1') text = text + "X";
                else
                if (plansza[i][j]=='0') text = text + " ";
                else
                    text = text + plansza[i][j];
            }
            System.out.println(text);
        }
        System.out.println("-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=");
    }


    boolean jestNaPlanszy(int i, int j) {
        if ((i>=0) && (i<lWierszy) && (j>=0) && (j<lKolumn)) return true;
        else return false;
    }


    public boolean szukajWyjscia(int i,int j)
    {
        if (!jestNaPlanszy(i,j)) return true;
        if (plansza[i][j]=='1') return false;
        if (odwiedzone[i][j]) return false;
        odwiedzone[i][j] = true;
        plansza[i][j] = '*';
        if (szukajWyjscia(i,j+1)) { return true;}
        if (szukajWyjscia(i,j-1)) { return true; }
        if (szukajWyjscia(i+1,j)) { return true;}
        if (szukajWyjscia(i-1,j)) { return true; }
        plansza[i][j] = '0';
        return false;
    }

    public void szukaj() {

        boolean czyZnalazl = szukajWyjscia(4, 7);
    }
}
