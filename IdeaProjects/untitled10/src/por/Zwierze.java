package por;

public abstract class Zwierze implements Plywanie, Latanie{

    public abstract void jedz();
    public abstract void spij();

    @Override
    public void lec() {
        System.out.println("Zwierze leci");
    }

    @Override
    public void wyladuj() {
        System.out.println("Zwierze laduje");
    }

    @Override
    public void plyn() {
        System.out.println("Zwierze plynie");
    }

    @Override
    public void wynurz() {
        System.out.println("Zwierze sie wynurza");
    }

    @Override
    public void zanurz() {
        System.out.println("Zwierze sie zanurza");
    }
}
