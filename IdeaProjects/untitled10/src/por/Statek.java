package por;

public class Statek implements Plywa {

    String statek;

    @Override
    public void plyn() {
        System.out.println(this.statek +" plynie łodzia");
    }

    public String getStatek() {
        return statek;
    }

    public void setStatek(String statek) {
        this.statek = statek;
    }
}
