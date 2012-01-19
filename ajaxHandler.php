<?php /*class section division is for splitting into various divisions. */
$more = '
         <div class="section"> 
      	 <h2>Work Experience</h2>
      <div class="item">
        <h3><a href="http://drdo.gov.in">Defence Research and Development Organisation</a></h3>
        <h4>Embedded Programmer</h4>
        <div class="date">March-June 2011</div>
        <div class="description">
          <p align="justify">
            Worked on the Real Time Embedded Computers lab of Research Centre Imarat of DRDO for a project. Developed a graphical user interface application for Serial Communication between a host and an embedded system. The developed software has the following features:
<ul><li>A Serial Port Driver for communicating with the Serial Port.</li>
<li>Make and Transmit packets to the OBP (On-Board Processor) according to their specified protocol.</li>
<li>Receive packets from the OBP.</li>
<li>Performing computations like checksum for determining the integrity of the sent and the received packet.</li>
<li>Logging real time datas like dynamic pressure, time, lift off value etc to a log file.</li>
</ul>
          </p>
        </div>
      </div>
      <div class="item">
        <h3>S-FOSS</h3>
        <h4>Linux Tutor</h4>
        <div class="date">2009 - 2010</div>
        <div class="description">
          <p align="justify">I tutored students in open source technologies and how to use Linux platform for their daily use. All the classes were conducted in SASTRA University. Most of them were undergraduate students. I worked with the students for making them familiar with the history of open source and how to work comfortably on a KDE and a GNOME Desktop environment.
</p><p>
Students were given a basic understanding of the file system hierarchy found in basic UNIX systems. Basic shell scripting was taught to them.</p>
         </div>
      	</div>
      </div>
<div class="section">
<h2>Projects</h2>
<div class="item">
<h3><a href="https://github.com/psibi/Neuron">Neuron</a></h3>
<h4>A Neural Network Simulator</h4>
<div class="date">NOV 2011 - JAN 2012</div>
<div class="description">
<p aligh="justify">A Artificial Neural Network simulator with following features:
<ul>
<li>Supports four standard algorithms: INCREMENTAL, BATCH, QPROP, RPROP</li>
<li>Both Fixed and Evolving Network topology supported</li>
<li>Persistence of previous Network configuration even on fresh startup</li>
<li>Performs Supervised Function Approximation</li>
</ul>
</div>
</div>

<div class="item">
<h3><a href="https://github.com/psibi/Typhoon">Typhoon</a></h3>
<h4>Rainfall Prediction Application Using Machine Learning</h4>
<div class="date">AUG 2011 - NOV 2011</div>
<div class="description">
<p align="justify">An application written in Java using SWT toolkit which incorporates Machine learning algorithm into it for prediction of an a certain event(Currently limited to rainfall prediction).</p>
</div>
</div>

<div class="item">
<h3><a href="https://github.com/psibi/Moony-Creator">Moony Creator</a></h3>
<h4>File System Creator under Linux</h4>
<div class="date">JAN 2009 - MAY 2010</div>
<div class="description">
<p align="justify">Moony Creator is a file system creator used for formatting storage services like hard disk, pendrive etc. It provides a GUI for creating a filesystem while using backend Linux utilities like mkfs. Used Python language for creating the program and used Qt libraries for creating the graphical frontend.</p>
</div>
</div>

<div class="item">
<h3><a href="http://codexengine.sourceforge.net">Codex Engine</a></h3>
<h4>Multimedia utility</h4>
<div class="date">JAN 2009 - AUG 2009</div>
<div class="description">
<p align="justify">A bash script for enabling various proprietary multimedia formats in Linux by providing access to various shared libraries of gstreamer and xine and registering their plugins.</p>
</div>
</div>
</div>
  <div class="section">
    <h2>Education</h2>
    <div class="item">
        <h3><a href="http://sastra.edu">SASTRA University, IN</a></h3>
        <h4>B.Tech, Computer Science and Engineering</h4>
        <div class="date">2008 - 2012</div>
        <div class="description">
          <p align="justify"> Studied engineering in SASTRA. Got diverted towards Machine Learning and Artifical Intelligence. Presented a paper related to Climate Prediction model using 
Machine Learning algorithm at INEMREC seminar organized by Indian Meterological Society.
<ul> <li> Ambassador of <strong> openSUSE </strong> project</li>
<li> Has been in Dean\'s List of Merit</li>
</ul></p>
        </div>
      </div>
      <div class="item">
        <h3>Nirmala Convent Inter College</h3>
        <h4>General Schooling/High School</h4>
        <div class="date">2003 - 2008</div>
        <div class="description">
          <p>Topped the ISC examination.</p>
        </div>
      </div>
    </div>
    <div class="section">
      <h2>Skills</h2>
      <div class="item">
        <h3>Programming Languages</h3>
        <div class="description">
          <p>C, C++, Java, VB .NET, C# .NET, VC++ .NET, Python</p>
        </div>
      </div>
      <div class="item">
        <h3>Scripting Languages</h3>
        <div class="description">
          <p>BASH</p>
        </div>
      </div>
      <div class="item">
        <h3>Web Technologies</h3>
        <div class="description">
          <p>HTML, CSS, Javascript, jQuery</p>
        </div>
      </div>
      <div class="item">
        <h3>DBMS</h3>
        <div class="description">
          <p>MySQL, Oracle</p>
        </div>
      </div>
    </div>

        ';              
  $type = $_REQUEST['type'];
  if ($type == "MORE"){
    echo $more; 
  }
?>
