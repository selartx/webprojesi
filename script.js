var access_token = "BQCmqimdnL2UX6XrMYldOD-hBfx8kPtH5zcsrjGTu2ctPzHFQq4fBEbmMeppoAE19463fWyvxpdW4qTdoCkJJPOIJIIZ6rblgPkNhux8zks0qgfcNuNNvHaQCb8v7387ZQ-Y7-rd2ha1rkb_Fb7RB3-TAAt4nt3mXemYBZFyE7FyGxn3pZfMsuq4porby6Sx2tjhBzNZM";
    
function fetchCurrentlyPlaying() {
    fetch('https://api.spotify.com/v1/me/player/currently-playing', {
        headers: {
            'Authorization': 'Bearer ' + access_token
        }
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
        displayCurrentlyPlaying(data);
    })
    .catch(error => console.error('Error:', error));
}

function displayCurrentlyPlaying(data) {
    var currentlyPlaying = document.getElementById('currentlyPlaying');
    if (data.is_playing) {
        currentlyPlaying.innerHTML = `
            <h2>Şu Anda Çalınıyor:</h2>
            <p>Parça: ${data.item.name}</p>
            <p>Sanatçı: ${data.item.artists[0].name}</p>
            <img src="${data.item.album.images[0].url}" alt="${data.item.name}">
        `;
    } else {
        currentlyPlaying.innerHTML = '<p>Şu anda bir şey çalınmıyor.</p>';
    }
}
function redirectToSpotify() {
    
    var clientId = "9395ab50b42b4506aa39b1528d3fdc86";
    var redirectUri = "http://localhost:8000/callback"; // Uygulamanızın geri yönlendirme URI'si
    var scope = "user-read-private user-read-email"; // Kullanılacak kapsam (scope)
    var spotifyAuthorizeUrl = `https://accounts.spotify.com/authorize?client_id=${"9395ab50b42b4506aa39b1528d3fdc86"}&response_type=code&redirect_uri=${encodeURIComponent("http://localhost:8000/callback")}&scope=${encodeURIComponent(scope)}`;

    // Kullanıcıyı Spotify yetkilendirme sayfasına yönlendirin
    window.location.href = spotifyAuthorizeUrl;
}