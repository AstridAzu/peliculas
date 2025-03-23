 

export const searchMovies = async ({search}) => {
    if (search=== '') return null
    if (search.length < 3) return null
  
    try{
      
      const options = {
        method: 'GET',
        headers: {
          accept: 'application/json',
          Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIxZjExZjljOTAyZTcxNmI5OWE1NDM0NWVhY2MyZjA1OCIsInN1YiI6IjY1N2VhYzY2OGYyNmJjMzIzMjc1MThjZiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.V0gvQo1ukw4kK7jCObNTq0btQ_WjUHhwyfR8kOvYEsA'
        }
      };
      const response = await fetch(`https://api.themoviedb.org/3/search/movie?query=${search}&include_adult=false&language=en-US&page=1`,options);
      
      const json = await response.json()
  
      const movies = json.results
    
      return movies?.map(movies =>({
        id: movies.id,
        title: movies.title,
        release_date: movies.release_date,
        poster_path: movies.poster_path,
  
      })) 
    }catch(e){throw new Error('error en el buscador de peliculas')}
    
  
  }