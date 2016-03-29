<%-- 
    Document   : index
    Created on : Mar 29, 2016, 2:04:04 PM
    Author     : Neybeans
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<%@ page contentType="text/html"%>
<%@ page import = "javax.servlet.RequestDispatcher" %>
<%
     RequestDispatcher rd = request.getRequestDispatcher("/CallMyService");
     request.setAttribute("name","HASSAN");
     rd.forward(request, response);
%>
