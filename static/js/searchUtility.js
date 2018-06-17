function focusSearchBox(){
  $("#searchPrimary").focus();
}

$("#searchPrimary").keyup(function (){
    var keyValue = $(this).val();
    var trimedLength = keyValue.trim().length ;
    console.log(keyValue);
    if(trimedLength!=0){
    var searchKey = $("#searchForm").serialize();
    $.ajax({
        type: 'POST',
        url: "searchFunction.php",
        data: searchKey,
        dataType: "text",
        success: function(data){
          handleSearchedResult(data);
        }
    });
  }else{
      $("#searchHint").text(" ");
  }
});



$('#searchForm').submit(function(e){
    e.preventDefault(); // stops the form submission
    var formContent = $(this).serialize();
    $.ajax({
      url: "searchFunction.php", // action attribute of form to send the values
      type: 'POST', // method used in the form
      data: formContent,
      dataType: "text",
    });
    });

    function handleSearchedResult(data){
      var rows = data.split("\n");
      var primaryKeyword = ""
      for (var i in rows) {
        var trimedLength = rows[i].trim().length ;
        if (trimedLength != 0){
        var singleRow = rows[i]
        var row = singleRow.split(";");
        var tmpKeyword = row[0];
        var tmpImgSrc = row[1];
        var tmpAddress = row[2];
        if(i == 0){
          primaryKeyword = tmpKeyword;
        }
        console.log(tmpKeyword);
        console.log(tmpImgSrc);
        console.log(tmpAddress);

      }
      }
      $("#searchHint").text(primaryKeyword);
    }
