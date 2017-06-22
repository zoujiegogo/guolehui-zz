 //加载footer信息
	  		$("footer").load("/guolehui/html/footer.html")
	  		//$("header").load("/guolehui/html/header.html")
//加载头部信息并判断
	  		$.ajax("/guolehui/html/header.html").then(function(data){
	  			data = $(data).find("#nav-list").css({display:"block"}).end();
	  			    $("header").append(data);
	  		});