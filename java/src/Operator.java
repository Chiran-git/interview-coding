public class Operator {
    public static void main(String[] args) {
        double var1 = 20.00d;
        double var2 = 80.00d;

        double total = (var1 + var2) * 100.00d;

        double rem = total % 40.00d;

        boolean isZero = (rem == 0) ? true : false;

        if (isZero) {
            System.out.println("No remainder");
        } else {
            System.out.println("Got some remainder");
        }
    }
}
