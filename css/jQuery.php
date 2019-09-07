<style>
	h1{
		background-color: #444444;
	}
	
	a[type = "text"]{
		
		
	}
</style>


<h1 id="head1">Heading One</h1>

<div class="container">
	<h1 id="head1">Heading One</h1>
	
</div>

<ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Services</a></li>
    <li><a href="#">Contact</a></li>


</ul>



<script>
	$(.container > h1).css('background-color','#ffffff')
	$(:text).css()  //for type in forms 
	$(a[href = "index.php"]).hide() //for attribute we use square brackets
    $('[href]').css('color','red')
    $('btnn').on('click', function(){
        $('ul#lst').hide()
    })
</script>

