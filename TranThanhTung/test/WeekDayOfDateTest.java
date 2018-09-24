import java.util.Calendar;
import java.util.HashMap;
import java.util.Map;

public class WeekDayOfDate {
    public static final String MONDAY = "Monday";
    public static final String TUESDAY = "Tuesday";
    public static final String WEDNESDAY = "Wednesday";
    public static final String THURSDAY = "Thursday";
    public static final String FRIDAY = "Friday";
    public static final String SATURDAY = "Saturday";
    public static final String SUNDAY = "Sunday";

    private static WeekDayOfDate instance = new WeekDayOfDate();
    private Map<Integer, String> dayOfWeeks;

    public static WeekDayOfDate getInstance() {
        return instance;
    }

    private WeekDayOfDate() {
        dayOfWeeks = new HashMap<>();
        dayOfWeeks.put(0, SUNDAY);
        dayOfWeeks.put(1, MONDAY);
        dayOfWeeks.put(2, TUESDAY);
        dayOfWeeks.put(3, WEDNESDAY);
        dayOfWeeks.put(4, THURSDAY);
        dayOfWeeks.put(5, FRIDAY);
        dayOfWeeks.put(6, SATURDAY);
    }

    public String getWeekDayOfDate(int day, int month, int year) {
        Calendar calendar = Calendar.getInstance();
        calendar.set(year, month, day);
        day = calendar.get(Calendar.DATE);
        month = calendar.get(Calendar.MONTH);
        year = calendar.get(Calendar.YEAR);
        if (month < 3) {
            month += 12;
            year--;
        }
        return dayOfWeeks.get((day+2*month+(3*(month+1)) / 5 + year + (year / 4)) % 7);
    }
}
