package por;

public class Samochod implements Jedzie{

    String samochod;

    @Override
    public void jedz() {
        System.out.println(this.samochod +" jedzie łodzia");
    }

    public String getSamochod() {
        return samochod;
    }

    public void setSamochod(String samochod) {
        this.samochod = samochod;
    }
}
