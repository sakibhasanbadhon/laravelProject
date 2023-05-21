
<!DOCTYPE html>
<html lang="en">
<head>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>


<style type="text/css">

    body{
	background: #F0F2F5;
    }


	p{
		font-family: SFProText-Regular, Helvetica, Arial, sans-serif;
		   margin-left: 14px;
    color: #606770;
    margin-top: -20px;

	}

	.div{
		width: 167px;
    	height: 201px;
   	 	border: 1px solid lightgrey;
    	border-radius: 8px;
    	    margin-left: 35px;
    margin-top: 28px;
	}
	.sub_div1{
		width: 100%;
		height: 161px;

		border-radius: 8px 8px 0 0;
	}

	.sub_div2{
		width: 100%;
		height: 40px;
		background:#FFFFFF;
		border-radius: 0 0 8px 8px;
	}

	.a1{
		text-decoration: none;
		color: #1877F3;
		font-size: 18px;
		font-family: SFProText-Medium, Helvetica, Arial, sans-serif;
		line-height: 41px;
		    margin-left: 30px;
	}

	.div:hover{
		 box-shadow: 1px 1px 9px 1px #c7c5c5;
		 transition: .2s;
	}

	.sub_div1 i{
		    font-size: 43px;
    line-height: 154px;
    margin-left: 55px;
    color: #1976F2;
    }

	.sub_rdiv1{
		    width: 380px;
    height: 365px;
    margin: 54px auto;
    background: white;
    box-shadow: 1px 1px 11px 1px #b1afaf;
	}

	.input2,.input3{
		width: 300px;
		height: 50px;
    border-radius: 8px;
    border: 1px solid lightgray;
    background: none;
    outline-color: #1877F2;
   margin-bottom: 10px;
   font-size: 15px;
   padding-left: 10px;


	}

	form{
		margin: 20px 0 0 30px;
		padding-top: 25px;
	}

	.submit{
		width: 315px;
    height: 50px;
    background: #1877f2;
    font-size: 20px;
    border: none;
    border-radius: 8px;
    color: white;
    font-weight: 600;

	}

		.submit:hover{
			background: #166FE5;
		}

	.input2{
		background: #E8F0FE;
	}

	.a2{
		text-decoration: none;
    color: #1976F2;
    line-height: 47px;
    margin-left: 109px;
    font-family: Helvetica, Arial, sans-serif;
	}

	.a2:hover{
		text-decoration: underline;
	}

	.aa{
   		 width: 180px;
   		 height: 50px;
   		 background: #50c343;
   		 margin: auto;
   		 border-radius: 8px;
   		 margin-top: 20px;
	}

		.aa:hover{
			background: #41b529;
		}

		.aa a{
			font-family: Helvetica, Arial, sans-serif;
  			text-decoration: none;
  			line-height: 51px;
   			margin-left: 13px;
   			font-weight: 600;
   			color: white;
		}

		.p{
			background:grey;
			margin-top: 8px;
		}


</style>



</head>
<body>





<section style="height: 1400px;">

	<div class="div_wrapper">


		<div class="right_div">
			<div class="sub_rdiv1">
					<form action="{{ route('store') }}" method="post">
                        @csrf
						<input class="input2" type="text" name="name" placeholder="Email address or phone number" required> <br>

						<input class="input3" type="text" name="email" placeholder="Password" required>

						{{-- <input class="submit"  type="submit" name="submit" value="Log In"> --}}

                        <button class="submit" type="submit" class="btn btn-sm btn-primary"> Create</button>
					</form>

					<a class="a2" href="#">Forgotten Password?</a>

					<hr style="width: 85%;">

					<div class="aa">
						<a href="#">Create New Account</a>
					</div>

					<p style="line-height: 200px; color:#484545;;"><b>Create a Page</b> for a celebrity, band or business.</p>


			</div>

		</div>

	</div>




</body>
</html>
