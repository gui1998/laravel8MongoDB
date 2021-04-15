
    <form action="{{ route('student.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="txtFirstName">First Name:</label>
            <input type="text" class="form-control" id="txtFirstName" placeholder="Enter First Name" name="txtFirstName">
        </div>
        <div class="form-group">
            <label for="txtLastName">Last Name:</label>
            <input type="text" class="form-control" id="txtLastName" placeholder="Enter Last Name" name="txtLastName">
        </div>
        <div class="form-group">
            <label for="txtAddress">Address:</label>
            <textarea class="form-control" id="txtAddress" name="txtAddress" rows="10" placeholder="Enter Address"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>