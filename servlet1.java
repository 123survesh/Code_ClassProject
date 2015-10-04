import java.io.*;
import javax.servlet.*;
public class serv extends HttpServlet
{
protected void doPost (HttpServletRequest request,HttpServletResponse response)
throws ServletException, IOException
{
String a = request.getparameter("superman");
response.setContentType("text/html")
out.println("
<h3>"+a+"</h3>
");
}

}