<%@ page import = "java.io.*,java.util.*" %>
<%@ page import = "java.text.*,java.sql.*"%>
<%@ page import = "javax.servlet.http.*,javax.servlet.*" %>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="http://localhost:20000/css/header.css" />
    <link rel="stylesheet" href="http://localhost:20000/css/footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://localhost:20000/scripts/index.js"></script>
    <script src="http://localhost:20000/scripts/header.js"></script>
    <style>

        table {
            margin: 20px;
            border: 4px solid rgb(124, 81, 124);
            border-radius: 12px;
            border-collapse: separate;
            border-spacing: 0;
            min-width: 100%;
        }

        table tr th,
        table tr td {
            border-right: 1px solid #444444;
            border-bottom: 1px solid #444444;
            padding: 8px;
        }

        table td {
            background: #01ff1536;
        }

        table th {
            background: #ffde7d;
        }

        .payment_details {
            text-align: center;
            position: relative;
            display: inline-block;
            left: 50%;
            margin: 4% 0%;
            border-radius: 50px;
            min-width: 90%;
            background-color: #ffffff54;
            transform: translate(-52%, 0%);
        }


        .pd1 {
            color: #f6416c ;
            font-size: 30px;
            font-family: cursive;
        }
	#redspan{
	    color: #f6416c;
	}

    </style>
</head>

<body>
    <header>
        <div class="navbar1">
            <span>
                <select id="location">
                    <optgroup>
                        <option id="mum">Mumbai</option>
                        <option id="pan">Panjim</option>
                        <option id="del">Delhi</option>
                        <option id="ban">Banglore</option>
                        <option id="pun">Pune</option>
                    </optgroup>
                </select>
            </span>
            <h1 id="sitename">BookMyMovie</h1>
        </div>
        <div>
            <nav class="navbar2">
                <span><a href="http://localhost:20000/index.php">Home</a></span>
                <span><a href="http://localhost:20000/TopHits.php">Top Hits</a></span>
            </nav>
        </div>
    </header>
    <content>
        <div class="payment_details">
            <div class="pd1">
                Payment History
            </div>
            <table>
                <tr>
                    <th >Order No.</th>
                    <th>Time</th>
                    <th>Details</th>
                    <th>Total Amount</th>
                </tr>
            	<%
	response.setContentType("text/html");
	String username = request.getParameter("username");
	try {
		Class.forName("org.mariadb.jdbc.Driver"); 
		Connection con = DriverManager.getConnection("jdbc:mariadb://localhost:3306/bookmymovie", "root", "2547");
		Statement stmt = con.createStatement();
		ResultSet i = stmt.executeQuery("SELECT RANK() OVER (ORDER BY time),time,SUM(price) FROM orders WHERE username = '"+username+"' GROUP BY time ORDER BY time;");
		while(i.next()){
			java.util.Date date = new java.util.Date ();
			SimpleDateFormat sdf = new SimpleDateFormat("d MMM, yyyy HH:mm");
			long time = i.getLong(2);
			date.setTime(time);
			out.println("<tr><td>"+i.getString(1)+"</td><td>"+sdf.format(date)+"</td>");
			ResultSet rs = stmt.executeQuery("SELECT moviename,ticketcount FROM orders WHERE username='"+username+"' AND time="+time+";");
			out.println("<td>");
			while(rs.next()){
			out.println(rs.getString(1)+"<span id='redspan'> x "+rs.getString(2)+"</span>");
				out.println("<br>");
			}
			out.println("</td>");
			out.println("<td>"+i.getString(3)+"</td></tr>");
		}

	} catch (Exception e) {
	        out.println(e);
	}	
%>
	    </table>
        </div>
    </content>
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h4 class="footer-list-header">About Pavilion</h4>
                <ul class="footer-list-top">
                    <li><a href="#">GET TO KNOW US</a></li>
                    <li><a href="#">PROMOS</a></li>
                    <li><a href="#">EVENTS</a></li>
                    <li><a href="#">privacy</a></li>
                </ul>
            </div>
            <div class="vl"></div>
            <div class="footer-column">
                <h4 class="footer-list-header">Help Me!</h4>
                <ul class="footer-list-top">
                    <li>+919254336743 <i class="fa fa-phone"></i></li>
                    <li><a href="#">bookmymovie@gmail.com <i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
            <div class="vl"></div>
            <div class="footer-column">
                <h4 class="footer-list-header">Connect with us</h4>
                <a href="facebook.com"><i class="fa fa-facebook"></i></a>
                <a href="twitter.com"><i class="fa fa-twitter"></i></a>
                <a href="instagram.com"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <center>
                <h4>OUR VISION</h4>
            </center>
            <center>
                <p>offering a wide range of theater and movie selection in various regions in India at one click!!</p>
            </center>
        </div>
    </footer>
</body>
</html>
