self.addEventListener('install',function(e)
{
	e.waitUntil(
		caches.open('tivbank').then(function(cache){
			return cache.addAll([
				'/',
				'index.php',
				'e.png'
				]);
		})
		);
}

	)