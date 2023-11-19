public class SpeedConverter {

    public boolean canPack(int bigCount, int smallCount, int goal)
    {
        return (bigCount * 5) + smallCount == goal;
    }
}