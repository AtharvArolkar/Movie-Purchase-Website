<%@ page import = "java.io.*,java.util.*" %>
<%@ page import = "java.io.*,java.util.*,java.sql.*"%>
<%@ page import = "javax.servlet.http.*,javax.servlet.*" %>
<%
	response.setContentType("text/html");
	String username = request.getParameter("username");
	String moviename = request.getParameter("moviename");
	String count = request.getParameter("ticketcount");
	String price = request.getParameter("price");
	String time = request.getParameter("time");
	try {
		Class.forName("org.mariadb.jdbc.Driver"); 
		Connection con = DriverManager.getConnection("jdbc:mariadb://localhost:3306/bookmymovie", "root", "password");
		Statement stmt = con.createStatement();
		int i = stmt.executeUpdate("INSERT INTO orders (username, time, moviename, ticketcount, price) VALUES ('"+username+"','"+time+"','"+moviename+"','"+count+"','"+price+"') ");
		out.println('y');
	} catch (Exception e) {
	        out.println(e);
	}	
	out.close();
%>