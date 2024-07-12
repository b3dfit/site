import folium

# Lista de coordenadas
data = [
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4953942,
    "longitude": -46.5966826,
    "timestamp": 1720735772780,
    "clima": "25",
    "date": 1720735772,
    "datetime": "2024-07-11 22:09:32"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822533,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822536,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822539,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822536,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822537,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822537,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822540,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822538,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822538,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822538,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822539,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822539,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822540,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822540,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822542,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822543,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822544,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822544,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822545,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822546,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822547,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822547,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822547,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822548,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822548,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822549,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822549,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822550,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822550,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822551,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822551,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822552,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822553,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822552,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822553,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822573,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822574,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822574,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822575,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822575,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822576,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822577,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822578,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822578,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822578,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822579,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822579,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822580,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822580,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822581,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822582,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822582,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822582,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822583,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822583,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822584,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822584,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822554,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822555,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822554,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822555,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822556,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822556,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822556,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822557,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822557,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822558,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822558,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822558,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822559,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822559,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822559,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822560,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822560,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822560,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822561,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822561,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822562,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822562,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822562,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822563,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822563,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822563,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822564,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822564,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822565,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822566,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822565,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822566,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822566,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822567,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822567,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822567,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822568,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822568,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822569,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822569,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822570,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822570,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822571,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822571,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822572,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822573,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822572,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5013161,
    "longitude": -46.5652796,
    "timestamp": 1720736822573,
    "clima": "25",
    "date": 1720736823,
    "datetime": "2024-07-11 22:27:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5029637,
    "longitude": -46.5634921,
    "timestamp": 1720736831077,
    "clima": "25",
    "date": 1720736831,
    "datetime": "2024-07-11 22:27:11"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5029637,
    "longitude": -46.5634921,
    "timestamp": 1720736840301,
    "clima": "25",
    "date": 1720736840,
    "datetime": "2024-07-11 22:27:20"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5029637,
    "longitude": -46.5634921,
    "timestamp": 1720736850836,
    "clima": "25",
    "date": 1720736850,
    "datetime": "2024-07-11 22:27:30"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5029637,
    "longitude": -46.5634921,
    "timestamp": 1720736860300,
    "clima": "25",
    "date": 1720736860,
    "datetime": "2024-07-11 22:27:40"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5029637,
    "longitude": -46.5634921,
    "timestamp": 1720736870300,
    "clima": "25",
    "date": 1720736870,
    "datetime": "2024-07-11 22:27:50"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5022371,
    "longitude": -46.5638204,
    "timestamp": 1720736880296,
    "clima": "25",
    "date": 1720736880,
    "datetime": "2024-07-11 22:28:00"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5014007,
    "longitude": -46.5623311,
    "timestamp": 1720736890881,
    "clima": "25",
    "date": 1720736890,
    "datetime": "2024-07-11 22:28:10"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5031868,
    "longitude": -46.5563206,
    "timestamp": 1720736900522,
    "clima": "25",
    "date": 1720736900,
    "datetime": "2024-07-11 22:28:20"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5031868,
    "longitude": -46.5563206,
    "timestamp": 1720736910300,
    "clima": "25",
    "date": 1720736911,
    "datetime": "2024-07-11 22:28:31"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5030092,
    "longitude": -46.5562125,
    "timestamp": 1720736920295,
    "clima": "25",
    "date": 1720736920,
    "datetime": "2024-07-11 22:28:40"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5029714,
    "longitude": -46.5561879,
    "timestamp": 1720736931060,
    "clima": "25",
    "date": 1720736931,
    "datetime": "2024-07-11 22:28:51"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.5029323,
    "longitude": -46.5561634,
    "timestamp": 1720736940294,
    "clima": "25",
    "date": 1720736940,
    "datetime": "2024-07-11 22:29:00"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4987788,
    "longitude": -46.558265,
    "timestamp": 1720736950559,
    "clima": "25",
    "date": 1720736950,
    "datetime": "2024-07-11 22:29:10"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4990523,
    "longitude": -46.558224,
    "timestamp": 1720736960908,
    "clima": "25",
    "date": 1720736960,
    "datetime": "2024-07-11 22:29:20"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4991391,
    "longitude": -46.558211,
    "timestamp": 1720736970292,
    "clima": "25",
    "date": 1720736970,
    "datetime": "2024-07-11 22:29:30"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4980177,
    "longitude": -46.557811,
    "timestamp": 1720736980302,
    "clima": "25",
    "date": 1720736980,
    "datetime": "2024-07-11 22:29:40"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4976224,
    "longitude": -46.5572395,
    "timestamp": 1720736990709,
    "clima": "25",
    "date": 1720736990,
    "datetime": "2024-07-11 22:29:50"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4975167,
    "longitude": -46.5570961,
    "timestamp": 1720737005088,
    "clima": "25",
    "date": 1720737012,
    "datetime": "2024-07-11 22:30:12"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4955538,
    "longitude": -46.5560405,
    "timestamp": 1720737010279,
    "clima": "25",
    "date": 1720737012,
    "datetime": "2024-07-11 22:30:12"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4957862,
    "longitude": -46.5560452,
    "timestamp": 1720737020312,
    "clima": "25",
    "date": 1720737020,
    "datetime": "2024-07-11 22:30:20"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4952935,
    "longitude": -46.5562607,
    "timestamp": 1720737037126,
    "clima": "25",
    "date": 1720737039,
    "datetime": "2024-07-11 22:30:39"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4951993,
    "longitude": -46.556281,
    "timestamp": 1720737040263,
    "clima": "25",
    "date": 1720737040,
    "datetime": "2024-07-11 22:30:40"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4959278,
    "longitude": -46.5542324,
    "timestamp": 1720737051209,
    "clima": "25",
    "date": 1720737051,
    "datetime": "2024-07-11 22:30:51"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4924246,
    "longitude": -46.5528231,
    "timestamp": 1720737060281,
    "clima": "25",
    "date": 1720737060,
    "datetime": "2024-07-11 22:31:00"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4932091,
    "longitude": -46.5527742,
    "timestamp": 1720737070299,
    "clima": "25",
    "date": 1720737070,
    "datetime": "2024-07-11 22:31:10"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4925437,
    "longitude": -46.552679,
    "timestamp": 1720737080264,
    "clima": "25",
    "date": 1720737082,
    "datetime": "2024-07-11 22:31:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4924736,
    "longitude": -46.552592,
    "timestamp": 1720737090872,
    "clima": "25",
    "date": 1720737090,
    "datetime": "2024-07-11 22:31:30"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4920622,
    "longitude": -46.5524515,
    "timestamp": 1720737101397,
    "clima": "25",
    "date": 1720737101,
    "datetime": "2024-07-11 22:31:41"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4916931,
    "longitude": -46.5520114,
    "timestamp": 1720737110171,
    "clima": "25",
    "date": 1720737110,
    "datetime": "2024-07-11 22:31:50"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4916077,
    "longitude": -46.5521416,
    "timestamp": 1720737120186,
    "clima": "25",
    "date": 1720737122,
    "datetime": "2024-07-11 22:32:02"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4918074,
    "longitude": -46.5522747,
    "timestamp": 1720737130393,
    "clima": "25",
    "date": 1720737131,
    "datetime": "2024-07-11 22:32:11"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4914035,
    "longitude": -46.5516713,
    "timestamp": 1720737141132,
    "clima": "25",
    "date": 1720737141,
    "datetime": "2024-07-11 22:32:21"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4913968,
    "longitude": -46.5515524,
    "timestamp": 1720737151128,
    "clima": "25",
    "date": 1720737151,
    "datetime": "2024-07-11 22:32:31"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.491883,
    "longitude": -46.5453797,
    "timestamp": 1720737160613,
    "clima": "25",
    "date": 1720737160,
    "datetime": "2024-07-11 22:32:40"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4905847,
    "longitude": -46.5456888,
    "timestamp": 1720737170822,
    "clima": "25",
    "date": 1720737170,
    "datetime": "2024-07-11 22:32:50"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4923313,
    "longitude": -46.544754,
    "timestamp": 1720737180417,
    "clima": "25",
    "date": 1720737180,
    "datetime": "2024-07-11 22:33:00"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4889497,
    "longitude": -46.5431036,
    "timestamp": 1720737193466,
    "clima": "25",
    "date": 1720737193,
    "datetime": "2024-07-11 22:33:13"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4887584,
    "longitude": -46.5437112,
    "timestamp": 1720737200293,
    "clima": "25",
    "date": 1720737202,
    "datetime": "2024-07-11 22:33:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.485006,
    "longitude": -46.5433832,
    "timestamp": 1720737211741,
    "clima": "25",
    "date": 1720737211,
    "datetime": "2024-07-11 22:33:31"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4858682,
    "longitude": -46.5421545,
    "timestamp": 1720737220571,
    "clima": "25",
    "date": 1720737220,
    "datetime": "2024-07-11 22:33:40"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4858549,
    "longitude": -46.5435607,
    "timestamp": 1720737230319,
    "clima": "25",
    "date": 1720737231,
    "datetime": "2024-07-11 22:33:51"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4856527,
    "longitude": -46.5421072,
    "timestamp": 1720737240250,
    "clima": "25",
    "date": 1720737242,
    "datetime": "2024-07-11 22:34:02"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4846965,
    "longitude": -46.5406771,
    "timestamp": 1720737250282,
    "clima": "25",
    "date": 1720737250,
    "datetime": "2024-07-11 22:34:10"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4848379,
    "longitude": -46.5406796,
    "timestamp": 1720737260203,
    "clima": "25",
    "date": 1720737260,
    "datetime": "2024-07-11 22:34:20"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4852371,
    "longitude": -46.539587,
    "timestamp": 1720737271138,
    "clima": "25",
    "date": 1720737271,
    "datetime": "2024-07-11 22:34:31"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4846203,
    "longitude": -46.5402937,
    "timestamp": 1720737280264,
    "clima": "25",
    "date": 1720737282,
    "datetime": "2024-07-11 22:34:42"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4842176,
    "longitude": -46.5398355,
    "timestamp": 1720737290277,
    "clima": "25",
    "date": 1720737293,
    "datetime": "2024-07-11 22:34:53"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4841771,
    "longitude": -46.539116,
    "timestamp": 1720737301136,
    "clima": "25",
    "date": 1720737301,
    "datetime": "2024-07-11 22:35:01"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4839766,
    "longitude": -46.5390595,
    "timestamp": 1720737310308,
    "clima": "25",
    "date": 1720737310,
    "datetime": "2024-07-11 22:35:10"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4837236,
    "longitude": -46.5399157,
    "timestamp": 1720737320294,
    "clima": "25",
    "date": 1720737321,
    "datetime": "2024-07-11 22:35:21"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4812382,
    "longitude": -46.5433094,
    "timestamp": 1720737331187,
    "clima": "25",
    "date": 1720737331,
    "datetime": "2024-07-11 22:35:31"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4826578,
    "longitude": -46.5368457,
    "timestamp": 1720737340527,
    "clima": "25",
    "date": 1720737340,
    "datetime": "2024-07-11 22:35:40"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4836823,
    "longitude": -46.5404054,
    "timestamp": 1720737350499,
    "clima": "25",
    "date": 1720737350,
    "datetime": "2024-07-11 22:35:50"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4810235,
    "longitude": -46.536101,
    "timestamp": 1720737361730,
    "clima": "25",
    "date": 1720737361,
    "datetime": "2024-07-11 22:36:01"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4813898,
    "longitude": -46.5329024,
    "timestamp": 1720737370534,
    "clima": "25",
    "date": 1720737370,
    "datetime": "2024-07-11 22:36:10"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4810721,
    "longitude": -46.5316734,
    "timestamp": 1720737381146,
    "clima": "25",
    "date": 1720737381,
    "datetime": "2024-07-11 22:36:21"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4804003,
    "longitude": -46.5310644,
    "timestamp": 1720737391306,
    "clima": "25",
    "date": 1720737391,
    "datetime": "2024-07-11 22:36:31"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4808753,
    "longitude": -46.5305481,
    "timestamp": 1720737400448,
    "clima": "25",
    "date": 1720737400,
    "datetime": "2024-07-11 22:36:40"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.481102,
    "longitude": -46.5303688,
    "timestamp": 1720737410986,
    "clima": "25",
    "date": 1720737410,
    "datetime": "2024-07-11 22:36:50"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4800555,
    "longitude": -46.5282796,
    "timestamp": 1720737420569,
    "clima": "25",
    "date": 1720737420,
    "datetime": "2024-07-11 22:37:00"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4724696,
    "longitude": -46.5217634,
    "timestamp": 1720737682093,
    "clima": "25",
    "date": 1720737682,
    "datetime": "2024-07-11 22:41:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4724696,
    "longitude": -46.5217634,
    "timestamp": 1720737682094,
    "clima": "25",
    "date": 1720737682,
    "datetime": "2024-07-11 22:41:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4724696,
    "longitude": -46.5217634,
    "timestamp": 1720737682094,
    "clima": "25",
    "date": 1720737682,
    "datetime": "2024-07-11 22:41:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4724696,
    "longitude": -46.5217634,
    "timestamp": 1720737682095,
    "clima": "25",
    "date": 1720737682,
    "datetime": "2024-07-11 22:41:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4724696,
    "longitude": -46.5217634,
    "timestamp": 1720737682095,
    "clima": "25",
    "date": 1720737682,
    "datetime": "2024-07-11 22:41:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4724696,
    "longitude": -46.5217634,
    "timestamp": 1720737682096,
    "clima": "25",
    "date": 1720737682,
    "datetime": "2024-07-11 22:41:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4724696,
    "longitude": -46.5217634,
    "timestamp": 1720737682096,
    "clima": "25",
    "date": 1720737682,
    "datetime": "2024-07-11 22:41:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4724696,
    "longitude": -46.5217634,
    "timestamp": 1720737682098,
    "clima": "25",
    "date": 1720737682,
    "datetime": "2024-07-11 22:41:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4724696,
    "longitude": -46.5217634,
    "timestamp": 1720737682098,
    "clima": "25",
    "date": 1720737682,
    "datetime": "2024-07-11 22:41:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4724696,
    "longitude": -46.5217634,
    "timestamp": 1720737682097,
    "clima": "25",
    "date": 1720737682,
    "datetime": "2024-07-11 22:41:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4724696,
    "longitude": -46.5217634,
    "timestamp": 1720737682099,
    "clima": "25",
    "date": 1720737682,
    "datetime": "2024-07-11 22:41:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4724696,
    "longitude": -46.5217634,
    "timestamp": 1720737682101,
    "clima": "25",
    "date": 1720737682,
    "datetime": "2024-07-11 22:41:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4724696,
    "longitude": -46.5217634,
    "timestamp": 1720737682102,
    "clima": "25",
    "date": 1720737682,
    "datetime": "2024-07-11 22:41:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4724696,
    "longitude": -46.5217634,
    "timestamp": 1720737682100,
    "clima": "25",
    "date": 1720737682,
    "datetime": "2024-07-11 22:41:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4724696,
    "longitude": -46.5217634,
    "timestamp": 1720737682102,
    "clima": "25",
    "date": 1720737682,
    "datetime": "2024-07-11 22:41:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4724696,
    "longitude": -46.5217634,
    "timestamp": 1720737682105,
    "clima": "25",
    "date": 1720737682,
    "datetime": "2024-07-11 22:41:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4724696,
    "longitude": -46.5217634,
    "timestamp": 1720737682104,
    "clima": "25",
    "date": 1720737682,
    "datetime": "2024-07-11 22:41:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4724696,
    "longitude": -46.5217634,
    "timestamp": 1720737682103,
    "clima": "25",
    "date": 1720737682,
    "datetime": "2024-07-11 22:41:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4724696,
    "longitude": -46.5217634,
    "timestamp": 1720737682108,
    "clima": "25",
    "date": 1720737682,
    "datetime": "2024-07-11 22:41:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4724696,
    "longitude": -46.5217634,
    "timestamp": 1720737682106,
    "clima": "25",
    "date": 1720737682,
    "datetime": "2024-07-11 22:41:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4724696,
    "longitude": -46.5217634,
    "timestamp": 1720737682107,
    "clima": "25",
    "date": 1720737682,
    "datetime": "2024-07-11 22:41:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4708632,
    "longitude": -46.522733,
    "timestamp": 1720737692356,
    "clima": "25",
    "date": 1720737692,
    "datetime": "2024-07-11 22:41:32"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4716807,
    "longitude": -46.5198527,
    "timestamp": 1720737702168,
    "clima": "25",
    "date": 1720737703,
    "datetime": "2024-07-11 22:41:43"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4713764,
    "longitude": -46.5193562,
    "timestamp": 1720737714161,
    "clima": "25",
    "date": 1720737714,
    "datetime": "2024-07-11 22:41:54"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4713189,
    "longitude": -46.519233,
    "timestamp": 1720737726922,
    "clima": "25",
    "date": 1720737726,
    "datetime": "2024-07-11 22:42:06"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4695459,
    "longitude": -46.5181802,
    "timestamp": 1720737733017,
    "clima": "25",
    "date": 1720737733,
    "datetime": "2024-07-11 22:42:13"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4699716,
    "longitude": -46.5180106,
    "timestamp": 1720737742244,
    "clima": "25",
    "date": 1720737742,
    "datetime": "2024-07-11 22:42:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4700436,
    "longitude": -46.5179996,
    "timestamp": 1720737752163,
    "clima": "25",
    "date": 1720737752,
    "datetime": "2024-07-11 22:42:32"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4700679,
    "longitude": -46.5180262,
    "timestamp": 1720737762193,
    "clima": "25",
    "date": 1720737762,
    "datetime": "2024-07-11 22:42:42"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4699825,
    "longitude": -46.5179883,
    "timestamp": 1720737772246,
    "clima": "25",
    "date": 1720737772,
    "datetime": "2024-07-11 22:42:52"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4700339,
    "longitude": -46.5179529,
    "timestamp": 1720737782204,
    "clima": "25",
    "date": 1720737782,
    "datetime": "2024-07-11 22:43:02"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4700867,
    "longitude": -46.5180009,
    "timestamp": 1720737792199,
    "clima": "25",
    "date": 1720737792,
    "datetime": "2024-07-11 22:43:12"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4699458,
    "longitude": -46.5179689,
    "timestamp": 1720737802251,
    "clima": "25",
    "date": 1720737802,
    "datetime": "2024-07-11 22:43:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4699174,
    "longitude": -46.5179328,
    "timestamp": 1720737812161,
    "clima": "25",
    "date": 1720737812,
    "datetime": "2024-07-11 22:43:32"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4698942,
    "longitude": -46.5178888,
    "timestamp": 1720737822182,
    "clima": "25",
    "date": 1720737822,
    "datetime": "2024-07-11 22:43:42"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4702161,
    "longitude": -46.5169435,
    "timestamp": 1720737832205,
    "clima": "25",
    "date": 1720737832,
    "datetime": "2024-07-11 22:43:52"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4703015,
    "longitude": -46.5167528,
    "timestamp": 1720737843048,
    "clima": "25",
    "date": 1720737843,
    "datetime": "2024-07-11 22:44:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.470008,
    "longitude": -46.5177041,
    "timestamp": 1720737852714,
    "clima": "25",
    "date": 1720737852,
    "datetime": "2024-07-11 22:44:12"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4696191,
    "longitude": -46.5179181,
    "timestamp": 1720737862207,
    "clima": "25",
    "date": 1720737863,
    "datetime": "2024-07-11 22:44:23"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4695364,
    "longitude": -46.5147894,
    "timestamp": 1720737874768,
    "clima": "25",
    "date": 1720737874,
    "datetime": "2024-07-11 22:44:34"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4684674,
    "longitude": -46.5189877,
    "timestamp": 1720737882191,
    "clima": "25",
    "date": 1720737882,
    "datetime": "2024-07-11 22:44:42"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4693033,
    "longitude": -46.5182267,
    "timestamp": 1720737892205,
    "clima": "25",
    "date": 1720737892,
    "datetime": "2024-07-11 22:44:52"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4688445,
    "longitude": -46.51489,
    "timestamp": 1720737902828,
    "clima": "25",
    "date": 1720737905,
    "datetime": "2024-07-11 22:45:05"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4689808,
    "longitude": -46.5151827,
    "timestamp": 1720737912194,
    "clima": "25",
    "date": 1720737914,
    "datetime": "2024-07-11 22:45:14"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4696145,
    "longitude": -46.5179319,
    "timestamp": 1720737923475,
    "clima": "25",
    "date": 1720737923,
    "datetime": "2024-07-11 22:45:23"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4692017,
    "longitude": -46.5147123,
    "timestamp": 1720737932201,
    "clima": "25",
    "date": 1720737932,
    "datetime": "2024-07-11 22:45:32"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4686442,
    "longitude": -46.5139247,
    "timestamp": 1720737943245,
    "clima": "25",
    "date": 1720737943,
    "datetime": "2024-07-11 22:45:43"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4682913,
    "longitude": -46.5131832,
    "timestamp": 1720737952208,
    "clima": "25",
    "date": 1720737952,
    "datetime": "2024-07-11 22:45:52"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4676922,
    "longitude": -46.5126984,
    "timestamp": 1720737962250,
    "clima": "25",
    "date": 1720737963,
    "datetime": "2024-07-11 22:46:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4676662,
    "longitude": -46.5137056,
    "timestamp": 1720737972542,
    "clima": "25",
    "date": 1720737972,
    "datetime": "2024-07-11 22:46:12"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4671871,
    "longitude": -46.5142069,
    "timestamp": 1720737982395,
    "clima": "25",
    "date": 1720737982,
    "datetime": "2024-07-11 22:46:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4666561,
    "longitude": -46.5147589,
    "timestamp": 1720737992193,
    "clima": "25",
    "date": 1720737992,
    "datetime": "2024-07-11 22:46:32"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4665089,
    "longitude": -46.514762,
    "timestamp": 1720738002081,
    "clima": "25",
    "date": 1720738002,
    "datetime": "2024-07-11 22:46:42"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4657932,
    "longitude": -46.5146073,
    "timestamp": 1720738012202,
    "clima": "25",
    "date": 1720738012,
    "datetime": "2024-07-11 22:46:52"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4649623,
    "longitude": -46.5146637,
    "timestamp": 1720738022165,
    "clima": "25",
    "date": 1720738023,
    "datetime": "2024-07-11 22:47:03"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4648719,
    "longitude": -46.5132015,
    "timestamp": 1720738033542,
    "clima": "25",
    "date": 1720738033,
    "datetime": "2024-07-11 22:47:13"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4649285,
    "longitude": -46.5131245,
    "timestamp": 1720738042232,
    "clima": "25",
    "date": 1720738042,
    "datetime": "2024-07-11 22:47:22"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.465481,
    "longitude": -46.5133919,
    "timestamp": 1720738052474,
    "clima": "25",
    "date": 1720738052,
    "datetime": "2024-07-11 22:47:32"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4653087,
    "longitude": -46.5098488,
    "timestamp": 1720738062403,
    "clima": "25",
    "date": 1720738063,
    "datetime": "2024-07-11 22:47:43"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4651367,
    "longitude": -46.5090982,
    "timestamp": 1720738072256,
    "clima": "25",
    "date": 1720738072,
    "datetime": "2024-07-11 22:47:52"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4646342,
    "longitude": -46.5083795,
    "timestamp": 1720738082486,
    "clima": "25",
    "date": 1720738082,
    "datetime": "2024-07-11 22:48:02"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.464461,
    "longitude": -46.5083456,
    "timestamp": 1720738092231,
    "clima": "25",
    "date": 1720738101,
    "datetime": "2024-07-11 22:48:21"
},
{
    "userID": "12345",
    "sessionID": "12345-1720735763397",
    "latitude": -23.4641418,
    "longitude": -46.5083751,
    "timestamp": 1720738102372,
    "clima": "25",
    "date": 1720738102,
    "datetime": "2024-07-11 22:48:22"
}
]

# Inicializa o mapa centrado no primeiro ponto
m = folium.Map(location=[data[0]["latitude"], data[0]["longitude"]], zoom_start=16)

# Adiciona os pontos ao mapa
for point in data:
    folium.Marker([point["latitude"], point["longitude"]]).add_to(m)

# Adiciona uma linha que conecta os pontos
folium.PolyLine([(point["latitude"], point["longitude"]) for point in data], color="lime").add_to(m)

# Salva o mapa em um arquivo HTML
m.save("map.html")
