package por;

public class Samolot implements Lata {

    String samolot;

    @Override
    public void lec() {
        System.out.println(this.samolot +" leci łodzia");
    }

    public String getSamolot() {
        return samolot;
    }

    public void setSamolot(String samolot) {
        this.samolot = samolot;
    }

}
