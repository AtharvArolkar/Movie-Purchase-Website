import jakarta.servlet.http.*;
import jakarta.servlet.*;
import java.io.*;
import java.util.*;
import java.sql.*;

public class SaveCart extends HttpServlet {
    public void doPost(HttpServletRequest req, HttpServletResponse res) throws ServletException, IOException {
        res.setContentType("text/html");
        PrintWriter out=res.getWriter();
        String username = req.getParameter("username");
        String moviename = req.getParameter("moviename");
        String count = req.getParameter("ticketcount");
        String price = req.getParameter("price");
        String time = req.getParameter("time");
        try {
            Class.forName("org.mariadb.jdbc.Driver");
            Connection con = DriverManager.getConnection("jdbc:mariadb://localhost:3306/bookmymovie", "root", "2547");
            Statement stmt = con.createStatement();
            int i = stmt.executeUpdate("INSERT INTO orders (username, time, moviename, ticketcount, price) VALUES ('"
                    + username + "','" + time + "','" + moviename + "','" + count + "','" + price + "') ");
            out.println('y');
        } catch (Exception e) {
            out.println(e);
        }
        out.close();

    }
}
