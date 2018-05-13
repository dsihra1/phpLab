$(function()
{
	$("select[name=cboPlayers").change(function()
	{
		//alert();
		if($(this).val() == '0')
		{
			$(".playerList").html("Please select a position to view players");
			//alert();
		}
        else
		{
			$.get("serverCode/playerSearch.php",
		         {p:$(this).val()},
		function(response)
		 {
			 $(".playerList").html(response);
		 });
		}			
	});
});