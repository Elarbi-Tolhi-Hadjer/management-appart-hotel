$(document).ready(function(){

  // Room Booking Date Pickers
  $("#checkIn").datepicker({
      minDate: 0,
      maxDate: '+1Y+6M',
      onSelect: function (dateStr) {
          var min = $(this).datepicker('getDate');
          $("#checkOut").datepicker('option', 'minDate', min || '0');
      }
  });

  $("#checkOut").datepicker({
      minDate: 0,
      maxDate: '+1Y+6M',
      onSelect: function () {
          var start = $("#checkIn").datepicker("getDate");
          var end = $("#checkOut").datepicker("getDate");
          var days = (end - start) / (1000 * 60 * 60 * 24);
          var cost = $("#roomCost").val();
          var totalCost = cost * days;
          $("#totalCost").val(totalCost);
      }
  });

  // Event Booking Date Picker
  $("#eventDate").datepicker({
      minDate: 0,
      maxDate: '+1Y+6M',
  });

  // Event Booking Cost Calculation
  $('#total_hours').on('change', function(){
      var package = this.value;
      var eventCost = $('#eventCost').val();
      var cost = package * eventCost;
      $('#eventTotalCost').val(cost);
  });

  // Gym Subscription Date Pickers
  $("#gymStart").datepicker({
      minDate: 0,
      onSelect: function(dateStr) {
          var startDate = $(this).datepicker("getDate");
          if (startDate) {
              var endDate = new Date(startDate);
              endDate.setDate(endDate.getDate() + 30); // Set 30 days later
              $("#gymEnd").datepicker("setDate", endDate);
          }
      }
  });

  $("#gymEnd").datepicker({
      minDate: 0
  });

  // Gym Subscription Cost Calculation
  $("#gymStart").on("change", function(){
      var cost = $("#gymCost").val();
      $("#gymTotalCost").val(cost);
  });

  // Time Picker for Events
  $('#eventTime').timepicker({
      timeFormat: 'h:mm p',
      interval: 30,
      minTime: '5',
      maxTime: '11:00pm',
      defaultTime: '9',
      startTime: '10:00',
      dynamic: true,
      dropdown: true,
      scrollbar: true
  });

});