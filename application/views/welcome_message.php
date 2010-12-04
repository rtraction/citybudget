<html>
<head>
<title>London Ontario City Budget API</title>

<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}

</style>
</head>
<body>

<h1>Welcome to the City Budget API!</h1>

<p>These are the way to use the api right now.</p>

<p>Get the budget for a year:</p>
<code><a href="<?php echo site_url('/api/budget/year/2010'); ?>"><?php echo site_url(); ?>/api/budget/<strong>year/2010</strong></a></code>

<p>Get the budget for a specific organization/department for a year:</p>
<code><a href="<?php echo site_url('api/budget/year/2010/org/662'); ?>"><?php echo site_url(); ?>api/budget/<strong>year/2010/org/662</strong></a></code>

<p>In the last example, you passed an organization id to the api. This probably makes you want a list of organization ids. That's here:</p>
<code><a href="<?php echo site_url('api/list/type/orgs'); ?>"><?php echo site_url(); ?>api/<strong>list/type/orgs</strong></a></code>

<p>You can also list the years and if we currently have approved and/or actual numbers:</p>
<code><a href="<?php echo site_url('api/list/type/years'); ?>"><?php echo site_url(); ?>api/<strong>list/type/years</strong></a></code>

<p>BUT WHAT ABOUT JSON!? I hear ya! Just add /format/json to any api request.</p>
<code><a href="<?php echo site_url('api/budget/year/2010/org/662/format/json'); ?>"><?php echo site_url(); ?>api/budget/year/2010/org/662/<strong>format/json</strong></a></code>


<p>If you have any questions feel free to contact <a href="mailto:gavin.blair+citybudget@rtraction.com">Gavin Blair</a>.</p>


<p><br />Page rendered in {elapsed_time} seconds</p>

</body>
</html>