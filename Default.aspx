<%@ Page Title="" Language="C#" MasterPageFile="~/MasterPage.master" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">

        <h2> ورود به سیستم مدیریت لیله</h2>
        <div class="bg"></div>
        

        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <div class="input-group">
            <span class="input-group-addon">
                نام:
            </span>
          <asp:TextBox ID="txtUsername" runat="server" CssClass="form-control" />
        </div>

        <div class="input-group">
            <span class="input-group-addon">
                رمز:
            </span>
          <asp:TextBox ID="txtPassword" runat="server" TextMode="Password" CssClass="form-control" />
        </div>

          <asp:Button Text="ورود" ID="btnLogin" runat="server" CssClass="btn btn-primary" />
       
       </div>    

</asp:Content>

