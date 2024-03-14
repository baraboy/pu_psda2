<!DOCTYPE html>
<html>
<head>
    <title>Weather Information</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Location</th>
                <th>Description</th>
                <th>Temperature</th>
                <th>Wind</th>
                <th>Pressure</th>
                <th>Humidity</th>
                <th>Feels Like</th>
                <th>Visibility</th>
                <th>UV Index</th>
                <th>Gust</th>
                <th>Last Updated</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $weatherData['location']['name'] }}</td>
                <td>{{ $weatherData['current']['condition']['text'] }}</td>
                <td>{{ $weatherData['current']['temp_c'] }} &#8451;</td>
                <td>{{ $weatherData['current']['wind_mph'] }} mph</td>
                <td>{{ $weatherData['current']['pressure_mb'] }} mb</td>
                <td>{{ $weatherData['current']['humidity'] }} %</td>
                <td>{{ $weatherData['current']['feelslike_c'] }} &#8451;</td>
                <td>{{ $weatherData['current']['vis_km'] }} km</td>
                <td>{{ $weatherData['current']['uv'] }}</td>
                <td>{{ $weatherData['current']['gust_mph'] }} mph</td>
                <td>{{ $weatherData['current']['last_updated'] }}</td>
            </tr>
        </tbody>
    