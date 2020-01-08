@extends('layouts.master')
@section('title', 'What is My IP?')
@section('style')
<style>
.card{
  -webkit-box-shadow: 0px 3px 19px -2px rgba(0,0,0,0.31);
  -moz-box-shadow: 0px 3px 19px -2px rgba(0,0,0,0.31);
  box-shadow: 0px 3px 19px -2px rgba(0,0,0,0.31);
  margin-top:20px;
  color:black
}
.card-body h1{
  font-size:28px;
  text-align:center
}
.card-body p {
  text-align:center;
}
.input-box{
  border:1px dashed #cecece;
  margin-top:30px;
  min-height:200px;
  border-radius:7px;
  padding-top:50px;
  background-color:#F5F5F5
}
.input-box h3{
    text-align: center;
    font-weight: 400

}
.input-box p{
    text-align: center;
    font-size: 24px;
    padding:20px
}
.input-box span{
padding: 15px 100px;
    background: #fff;
    border-radius: 6px;
    color: #000000;
}
.panel{
  color:black;
  border:1px solid #ddd;
  margin-bottom: 20px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-box-shadow: 0px 3px 19px -2px rgba(0,0,0,0.31);
  -moz-box-shadow: 0px 3px 19px -2px rgba(0,0,0,0.31);
  box-shadow: 0px 3px 19px -2px rgba(0,0,0,0.31);
}
.panel-heading{
  padding:10px;
  color: #333;
  background-color: #f5f5f5;
  border-bottom: 1px solid #ddd;
}
.panel-body{
  padding:10px;
  font-size:14px;
  color:#777
}
.importance-div{
  margin-top:30px
}
.ip-details-card h1{
  padding: 10px;
  border-bottom: 1px solid green
}

</style>
@endsection
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8 ">
        <div class="card">
          <div class="card-body">
            <h1>What is My IP?</h1>
            <p > Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
            <div class="input-box">
                <h3>Your IP</h3>
                <p><span>{{ $data['ip'] }}</span></p>
            </div>
            
          </div>
        </div>

        <div class="card">
          <div class="card-body ip-details-card">
            <h1>IP Details</h1>
            <div class="row">
              <div class="col-12 col-md-6 iframe-map">
                <iframe width="99%" style="height:415px; margin-left:10px" scrolling="no" frameborder="0"  id="map" marginwidth="0" marginheight="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;ie=UTF8&amp;iwloc=A&amp;output=embed&amp;z=6&amp;q={{ $data['city'] }},{{ $data['region_name'] }},{{ $data['country_name'] }}"></iframe>
              </div>
              <div class="col-12 col-md-6">
                <table class="table table-bordered">
                  <tr>
                    <th>IP Address</th>
                    <td>{{ $data['ip'] }}</td>
                  </tr>
                  <tr>
                    <th>Country</th>
                    <td>{{ $data['country_name'] }}</td>
                  </tr>
                  <tr>
                    <th>Country Code</th>
                    <td>{{ $data['country_code'] }}</td>
                  </tr>
                  <tr>
                    <th>Region</th>
                    <td>{{ $data['region_name'] }}</td>
                  </tr>
                  <tr>
                    <th>City</th>
                    <td>{{ $data['city'] }}</td>
                  </tr>
                  <tr>
                    <th>Zip Code</th>
                    <td>{{ $data['zip_code'] }}</td>
                  </tr>
                  <tr>
                    <th>Latitude</th>
                    <td>{{ $data['latitude'] }}</td>
                  </tr>
                  <tr>
                    <th>Longitude</th>
                    <td>{{ $data['longitude'] }}</td>
                  </tr>
                  <tr>
                    <th>Timezone</th>
                    <td>{{ $data['time_zone'] }}</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
          <div class="card">
              <div class="card-body">
                
              </div>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-8">
          <div class="importance-div">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <strong>What is Plagiarism?</strong>
                  </div>
                  <div class="panel-body">
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <strong>How Plagiarism Word?</strong>
                  </div>
                  <div class="panel-body">
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <strong>Test Yourself</strong>
                  </div>
                  <div class="panel-body">
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>

@endsection