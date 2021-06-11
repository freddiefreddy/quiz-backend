
  $(document).ready(function () {
    $("#category_id").on("change", function () {
      var stateID = $(this).val();
      if (stateID) {
        $.ajax({
          url: '/findLevelsWithCategoryID/' + stateID,
          type: "GET",
          data: { "_token": "{{ csrf_token() }}" },
          dataType: "json",
          success: function (data) {
            console.log(data);
            if (data) {
              $('#level').empty();
              $('#level').focus;
              $('#level').append('<option value="">-- Select Level --</option>');
              $.each(data, function (key, value) {
                $('select[name="level_id"]').append('<option value="' + value.id + '">' + value.name + '</option>');
              });
            } else {
              $('#level').empty();
            }
          }
        });
      }
      else {
        $('#level').empty();
      }
    }
    )
  });


  $(document).ready(function () {
    $("#editcategory_id").on("change", function () {
      var stateID = $(this).val();
      if (stateID) {
        $.ajax({
          url: '/findLevelsWithCategoryID/' + stateID,
          type: "GET",
          data: { "_token": "{{ csrf_token() }}" },
          dataType: "json",
          success: function (data) {
            console.log(data);
            if (data) {
              $('#level_cat').empty();
              $('#level_cat').focus;
              $('#level_cat').append('<option value="">-- Select Level --</option>');
              $.each(data, function (key, value) {
                $('select[name="level_id"]').append('<option value="' + value.id + '">' + value.name + '</option>');
              });
            } else {
              $('#levels_cat').empty();
            }
          }
        });
      }
      else {
        $('#levels_cat').empty();
      }
    }
    )
  });

