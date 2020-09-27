<%-- 
    Document   : newjsp
    Created on : Sep 27, 2020, 10:18:05 PM
    Author     : HP
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page import="java.util.Date"%>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <%Date date = new Date(); %>
    <body>
        <h1>Hello World!</h1>
        <h2>Todays date is <%= date %></h2>
        <br>
        <br>
        <%! int day=6; %>
        <% if(day==6 || day==7) {
         out.print("weekend");
        }else{
          out.print("weekday");
        }
        
        %>
        <br>
        <%! String arr[]={"Monday","Tuesday","wednesday","Thursday","friday"}; %>
        <%! int size; %>
        <% for(size=0 ; size<5; size++){ %>
        <font color='green' size='<%=size+1 %>'>
            <% out.print(arr[size]+"<br>"); %>
            </font>
            <% } %>
        
    </body>
</html>
