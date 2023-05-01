<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Employee</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Northwind</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Početna <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('region.index') }}">Region</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('territory.index') }}">Territories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products.index') }}">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('shipper.index') }}">Shippers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('order.index') }}">Orders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('customerdemographic.index') }}">Customers Demographic</a>
            </li>
            <li class="new-item">
                <a class="nav-link" href="{{ route('customers.index') }}">Customers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('category.index') }}">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('suppliers.index') }}">Suppliers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('orderDetails.index') }}">Order Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('employee.index') }}">Employees</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('customer_customer_demos.index') }}">Customer Customer Demo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('employee_territories.index') }}">Employee Territories</a>
            </li>
    </div>
</nav>
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Add Employee</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('employee.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Employee ID:</strong>
                <input type="text" name="EmployeeID" class="form-control" placeholder="Employee ID">
                @error('EmployeeID')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Last Name:</strong>
                <input type="text" name="LastName" class="form-control" placeholder="Last Name">
                @error('LastName')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>First Name:</strong>
                <input type="text" name="FirstName" class="form-control" placeholder="First Name">
                @error('FirstName')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="Title" class="form-control" placeholder="Title">
                @error('Title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
            </div> <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Title Of Courtesy:</strong>
                <input type="text" name="TitleOfCourtesy" class="form-control" placeholder="Title Of Courtesy">
                @error('TitleOfCourtesy')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   <strong>Birth Date:</strong>
                     <input type="date" name="BirthDate" class="form-control" placeholder="Birth Date">
                        @error('BirthDate')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                        <strong>Hire Date:</strong>
                        <input type="date" name="HireDate" class="form-control" placeholder="Hire Date">
                        @error('HireDate')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" name="Address" class="form-control" placeholder="Address">
                    @error('Address')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>City:</strong>
                    <input type="text" name="City" class="form-control" placeholder="City">
                    @error('City')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Region:</strong>
                    <input type="text" name="Region" class="form-control" placeholder="Region">
                    @error('Region')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Postal Code:</strong>
                    <input type="text" name="PostalCode" class="form-control" placeholder="Postal Code">
                    @error('PostalCode')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Country:</strong>
                    <input type="text" name="Country" class="form-control" placeholder="Country">
                    @error('Country')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">

                                                        <strong>Home Phone:</strong>
                                                        <input type="text" name="HomePhone" class="form-control" placeholder="Home Phone">
                                                        @error('HomePhone')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">

                                                                <strong>Extension:</strong>
                                                                <input type="text" name="Extension" class="form-control" placeholder="Extension">
                                                                @error('Extension')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                     <strong>Photo:</strong>
                        <input type="text" name="Photo" class="form-control" placeholder="Photo">
                        @error('Photo')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Notes:</strong>
                    <input type="text" name="Notes" class="form-control" placeholder="Notes">
                    @error('Notes')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Reports To:</strong>
                    <input type="text" name="ReportsTo" class="form-control" placeholder="Reports To">
                    @error('ReportsTo')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Photo Path:</strong>
                    <input type="text" name="PhotoPath" class="form-control" placeholder="Photo Path">
                    @error('PhotoPath')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Salary:</strong>
                    <input type="text" name="Salary" class="form-control" placeholder="Salary">
                    @error('Salary')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </div>
    </form>
</div>
</body>

</html>
