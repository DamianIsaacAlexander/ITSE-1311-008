<div class="form-container">
    <form action="mailto:damianalexanderisaac@gmail.com" method="post">
        <fieldset>
            <legend>Appointment</legend>

            <label for="fname">First Name</label><br>
            <input type="text" id="fname" name="fname" autofocus><br>

            <label for="lname">Last Name</label><br>
            <input type="text" id="lname" name="lname"><br>

            <label for="email">Email</label><br>
            <input type="email" id="email" name="email"><br>

            <label for="price">Project Price</label><br>
            <input type="number" id="price" name="price" min="0" max="1000" value="0"><br>

            <label for="priority">Priority</label><br>
            <input type="range" id="priority" name="priority" min="0" max="100" value="20"><br>

            <label for="date">Meeting Date</label><br>
            <input type="date" id="date" name="date" min="0" max="100" value="20"><br>

            <label for="time">Meeting Time</label><br>
            <input type="time" id="time" name="time" min="0" max="100" value="20"><br>

            <input type="submit">
        </fieldset>
    </form>
</div>