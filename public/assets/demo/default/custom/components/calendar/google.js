var CalendarGoogle = {
    init: function() {
        $("#m_calendar").fullCalendar({
            header: {
                left: "prev,next today",
                center: "title",
                right: "month,listYear"
            },
            displayEventTime: !1,
            googleCalendarApiKey: "AIzaSyDcnW6WejpTOCffshGDDb4neIrXVUA1EAE",
            events: "en.usa#holiday@group.v.calendar.google.com",
            eventClick: function(e) {
                return window.open(e.url, "gcalevent", "width=700,height=600"), !1
            },
            loading: function(e) {},
            eventRender: function(e, n) {
                e.description && (n.hasClass("fc-day-grid-event") ? (n.data("content", e.description), n.data("placement", "top"), mApp.initPopover(n)) : n.hasClass("fc-time-grid-event") ? n.find(".fc-title").append('<div class="fc-description">' + e.description + "</div>") : 0 !== n.find(".fc-list-item-title").lenght && n.find(".fc-list-item-title").append('<div class="fc-description">' + e.description + "</div>"))
            }
        })
    }
};
jQuery(document).ready(function() {
    CalendarGoogle.init()
});