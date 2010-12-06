<?php include 'header.php'; ?>

<p>London Ontario's city budget data is available in PDF form at <br />
<a href='http://london.ca/d.aspx?s=/budget/Budget_<?php echo date('Y');?>/default.htm'>http://london.ca/d.aspx?s=/budget/Budget_<?php echo date('Y');?>/default.htm</a>.</p>

<p>We've inputted this information into a database and are providing RESTful access to it through this API. This page contains instructions for using the API.</p>

<p>Get the budget for a year:</p>
<code><a href="<?php echo site_url('/api/budget/year/2010'); ?>"><?php echo site_url(); ?>/api/budget/<strong>year/2010</strong></a></code>

<p>Get the budget for a specific organization/department for a year:</p>
<code><a href="<?php echo site_url('api/budget/year/2010/org/803'); ?>"><?php echo site_url(); ?>/api/budget/<strong>year/2010/org/803</strong></a></code>

<p>In the last example, you passed an organization id to the api. This probably makes you want a list of organization ids. These are the lists supported:</p>
<code><em>//List all organizations</em>
<a href="<?php echo site_url('api/list/type/orgs'); ?>"><?php echo site_url(); ?>/api/<strong>list/type/orgs</strong></a>

<em>//List all currently available years and if we currently have approved and/or actual numbers:</em>
<a href="<?php echo site_url('api/list/type/years'); ?>"><?php echo site_url(); ?>/api/<strong>list/type/years</strong></a></code>

<p>BUT WHAT ABOUT JSON!? I hear ya! Just add /format/json to any api request.</p>
<code><em>//regular JSON</em>
<a href="<?php echo site_url('api/budget/year/2010/org/803/format/json'); ?>"><?php echo site_url(); ?>/api/budget/year/2010/org/803/<strong>format/json</strong></a>

<em>//JSONP friendly</em>
<a href="<?php echo site_url('api/budget/year/2010/org/803/format/jsonp'); ?>"><?php echo site_url(); ?>/api/budget/year/2010/org/803/<strong>format/jsonp</strong></a>
</code>
<p>Want to pull the JSON info dynamically? Something like this should work for you (we're using JQuery here):</p>
<script src="https://gist.github.com/729639.js"> </script>


<p>If you have any questions feel free to contact <a href="mailto:gavin.blair+citybudget@rtraction.com">Gavin Blair</a>.</p>

<?php include 'footer.php'; ?>