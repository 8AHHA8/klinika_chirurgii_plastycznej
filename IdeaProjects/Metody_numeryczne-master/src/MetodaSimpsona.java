public class MetodaSimpsona {
    public static void main(String[] args) {
        double a = 0; // początek przedziału
        double b = 1; // koniec przedziału
        int n = 100; // liczba podprzedziałów (parzysta liczba)

        double h = (b - a) / n; // szerokość podprzedziału
        double sum = 0;

        for (int i = 0; i <= n; i++) {
            double x = a + i * h;
            double y = function(x);

            if (i == 0 || i == n) {
                sum += y;
            } else if (i % 2 == 1) {
                sum += 4 * y;
            } else {
                sum += 2 * y;
            }
        }

        double integral = (h / 3) * sum;
        System.out.println("Wartość całki: " + integral);
    }

    // Przykładowa funkcja, którą chcesz całkować
    public static double function(double x) {
        return Math.sin(x);
    }
}