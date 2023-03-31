

<!-- Modal -->
<div class="modal fade" id="bookingstatus" tabindex="-1" role="dialog" aria-labelledby="bookingstatusLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bookingstatusLabel">Check your status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
        mysql_connect("localhost","root","");
        mysql_select_db("booking");
        session_start();
        echo "Welcome  ";
        echo $_SESSION['name'];
        $name=$_SESSION['name'];
        echo'<table border="2" width="90%">
        <tr height="5px">
        <td>Name</td>
        <td>Seats Booked</td>
        <td>Cancel Booking</td>
        </tr>
        </table>';
        $query="SELECT * FROM users WHERE username='$name' ";
        $r=mysql_query($query);
        while($row=mysql_fetch_assoc($r)){
               $name=$row['username'];
               $book=$row['ticket'];
            
            }

            $movie=$_SESSION['mname'];

        echo'<table border="2" width="90%"
        <tr height="5px">
        <td width="75px">'.$name.'</td>
        <td width="158px">'.$book.'</td>
        <td><a href="partials/_cancel2.php?">Cancel<a></td>
        </tr>
        </table>';   


               
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>