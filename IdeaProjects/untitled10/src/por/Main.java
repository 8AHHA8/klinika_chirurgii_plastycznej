package por;

public class Main {

    public static void main(String[] args) {
	Statek st1 = new Statek();
    Samolot sam1 = new Samolot();
    Samochod chod1 = new Samochod();

        st1.setStatek("Nautilius");
        sam1.setSamolot("Wzium");
        chod1.setSamochod("Brum");

        st1.plyn();
        sam1.lec();
        chod1.jedz();

        Wieloryb wieloryb = new Wieloryb();

        wieloryb.jedz();
        wieloryb.spij();



            }
        }

