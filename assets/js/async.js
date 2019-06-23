const asyncFetch = (path, type = 'GET', data = null) => {

  return new Promise(async (resolve, reject) => {

    // Check request type
    if (type === 'GET') {
      // Lancer la requête
      const response = await fetch(path);

      // Vérifier la requête
      if (!response.ok) { return reject('Error') }
      else {
        const dataJson = await response.json();
        return resolve(dataJson)
      }
    } else if (type === 'POST') {
      console.log(data)
      // Lancer la requête
      const response = await fetch(path);

      // Vérifier la requête
      if (!response.ok) { return reject('Error') }
      else {
        return resolve(response)
      }
    }
  })
}