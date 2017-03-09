<title>MySQL Health Chech Audit</title>
<?php include "header.html";?>
<div class="db-hash-header">
	<div class="container">
		<h1>MySQL Health Check Audit</h1>
	</div>
</div>
<div class="row">
	<div class="main col-md-9">
		<p>MySQL Health Check Audit is an in-depth review of databases.<strong>Performance audit</strong>will also be done as part of health check audit.A detailed written report along with the recommendations will be provided.The main purpose of a health check audit is to find problems before they occur,ensure that database can handle load.In MySQL Health Check Audit,we check each and every aspect of database,you can see the contents of a health check report below.</p>
		<p>Charges are based on <strong>number of servers and throughness </strong>of the check.If you wish to exclude some checks in the audit,we will reduce the price accordingly.You can decide whether you just want recommendations or you want us to implement the recommendations,we charge for the time spent on the task.</p>
		<p><strong>How health check audit helps?</strong><br>Example:You might be taking backups.But have you ever checked the RPO(Recovery Point Objectve) - Up to what point in time the data can be recovered and RTO(Recovery time objective)-How much time did you take to recover after notification of a business process disruption?<br>
		As a part of MySQL Health Check Audit, we review backup strategy and do backup restore test which identifies the problem if any.</p>

		<h3 >How a health check report looks?</h3>
	</div>
	
		<div class="col-md-4" >
		<b >EXECUTIVE SUMMARY  & RECOMMENDATIONS</b>
			<ul >
				<li>HARDWARE</li>
				<li>OS SPECIFIC</li>
				<li>MYSQL SPECIFIC</li>
				<li>BACKUP</li>
				<li>UPGRADES</li>
			</ul>
		
		<b >MYSQL SERVER CHECKS</b>
			<ul >
				<li>VERSION</li>
				<li>CONFIGURATION FILE</li>
				<li>MYSQL USER GRANTS</li>
				<li>MYSQL DATA COLLECTIONS</li>
				<li>Traffic</li>
				<li>Binary Log</li>
				<li>Replicaton</li>
				<li>Handlers</li>
				<li>Process list</li>
				<li>Selects and Join buffers</li>
			</ul>
		
		<b >MySQL Command Counters</b>
			<ul >
				<li>Query Cache</li>
				<li>INNODB AND MYISAM CONFIGURATION</li>
				<li>INNODB ENGINE STATUS</li>
				<li>INNODB LOG FILE SIZE</li>
				<li>MYISAM KEY CACHE EFFICIENCY</li>
			</ul>

		
		<b >MYSQL SCHEMAS AND TABLE DISTRIBUTION</b>
			<ul >
				<li>TOP 10 TABLES</li>
				<li>MOST ACCESSED TABLE FOR WRITES</li>
			</ul>
		
		<b >SLOW QUERY ANALYSIS</b>
			<ul >
				<li>SLOW QUERY IDENTIFIED</li>
				<li>SLOW QUERY REVIEW SORTED BY COUNT</li>
				<li>QUERY #1</li>
				<li>QUERY #2</li>
				....<br>....
				<li>QUERY #N</li>
			</ul>
		</div>
		<div class="col-md-4" >
		<b >RECOMMENDATION FOR THE INDEX MODIFICATION BASED ON SQL REVIEW</b>
			<ul >
				<li>RESULTS FROM PT-INDEX-USAGE</li>
			</ul>
		
		<b >BACKUPS</b>
			<ul >
				<li>RPO(Recoveru Point 	Objective)</li>
				<li>RTO(Recovery Time Objective)</li>
			</ul>
		
		<b >ANNEX</b><br>
		<b >SYSTEM CHECKS</b>
			<ul >
				<li>CPU</li>
				<li>Uname</li>
				<li>Mounts</li>
				<li>Process bad gui</li>
				<li>Memory Information</li>
				<li>Swappiness</li>
				<li>CPU Statistics</li>
				<li>Memory Statistics</li>
				<li>Page activity</li>
				<li>Paging Statistics</li>
				<li>IO</li>
				<li>Network</li>
				<li>NFS</li>
			</ul>
		
		<b >MYSQL SERVER CHECKS</b>
			<ul >
	    		<li>Version</li>
	    		<li>MySQL Config FIle</li>
	    		<li>Disk Usage of MySQL</li>
	    		<li>MySQL Status</li>
	    		<li>Server Variables</li>
	    		<li>Server Status</li>
	    		<li>InnoDB Status</li>
	    	</ul>
	   
	    <b >MySQL SCHEMA CHECKS</b>
	    	<ul >			
	    		<li>Schemas present</li>
	    		<li>Schema dimensions</li>
	    		<li>Top 10 tables</li>
	    	</ul>
	 
	    <p class="align-center">
			<a href="#"class="btn btn-outline-inverse btn-lg createticket" onclick="ga("send","event","Jumbotron actions")">CONTACT US</a>
		 </p>
		</div> 

	<div class="db-hash-content">
		<h4>Emergency Help Line</h4>
		<table>
			<tbody>
				<tr>
					<td><a href="skype:help.dbhash?call"><img src="http://www.dbhash.com/assets/icons/generic/rsz_skype.png" width="20" height="20"></a></td>
					<td><a href="skype:help.dbhash?call">help.dbhash</a></td>
				</tr>
				<tr>
					<td><a href="mailto:support@dbhash.com"><img src="http://dbhash.com/assets/icons/generic/email.png" width="20" height="20"></a></td>
					<td><a href="mailto:support@dbhash.com"><b>support@dbhash.com</b></a></td>
				</tr>
			</tbody>
		</table>
	</div>
	</div>
<?php include "footer.html";?>
