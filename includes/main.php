<main class="main-content">
    <section class="hero-section">
        <div class="container">
        <div class="hero-content">
            <div class="hero-info">
            <div class="hero-title-container">
                <Badge variant="secondary" class="new-release-badge">
                New Release
                </Badge>
                <h1 class="hero-title">Dune: Part Two</h1>
                <p class="hero-description">
                Paul Atreides unites with Chani and the Fremen while seeking revenge against the conspirators who
                destroyed his family.
                </p>
            </div>
            <div class="movie-meta">
                <div class="meta-item">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-star"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
                <span class="meta-text">8.7/10</span>
                </div>
                <div class="meta-item">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-calendar"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M11 15h1" /><path d="M12 15v3" /></svg>
                <span class="meta-text">2024</span>
                </div>
                <div class="meta-item">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-clock-hour-12"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M12 7v5" /></svg>
                <span class="meta-text">166 min</span>
                </div>
            </div>
            <div class="hero-actions">
                <Button class="watch-button">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-player-play"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 4v16a1 1 0 0 0 1.524 .852l13 -8a1 1 0 0 0 0 -1.704l-13 -8a1 1 0 0 0 -1.524 .852z" /></svg>
                Watch Now
                </Button>
                <Button variant="outline">Add to Watchlist</Button>
            </div>
            </div>
            <Image
            src="/placeholder.svg?height=600&width=400"
            width={500}
            height={750}
            alt="Dune: Part Two"
            class="hero-image"
            />
        </div>
        </div>
    </section>
    <section class="new-releases-section">
        <div class="container">
        <div class="section-header">
            <div class="section-title-container">
            <h2 class="section-title">New Releases</h2>
            <p class="section-description">Check out the latest movies that just hit our platform</p>
            </div>
        </div>
        <Tabs defaultValue="all" class="movies-tabs">
            <TabsList class="tabs-list">
            <TabsTrigger value="all">All</TabsTrigger>
            <TabsTrigger value="action">Action</TabsTrigger>
            <TabsTrigger value="comedy">Comedy</TabsTrigger>
            <TabsTrigger value="drama">Drama</TabsTrigger>
            </TabsList>
            <TabsContent value="all" class="tabs-content">
            <div class="movie-grid">
                {[
                {
                    title: "Godzilla x Kong: The New Empire",
                    image: "/placeholder.svg?height=450&width=300",
                    rating: "7.8",
                    year: "2024",
                    genre: "Action",
                },
                {
                    title: "Kung Fu Panda 4",
                    image: "/placeholder.svg?height=450&width=300",
                    rating: "6.9",
                    year: "2024",
                    genre: "Animation",
                },
                {
                    title: "Ghostbusters: Frozen Empire",
                    image: "/placeholder.svg?height=450&width=300",
                    rating: "7.2",
                    year: "2024",
                    genre: "Comedy",
                },
                {
                    title: "The Fall Guy",
                    image: "/placeholder.svg?height=450&width=300",
                    rating: "7.5",
                    year: "2024",
                    genre: "Action",
                },
                {
                    title: "Civil War",
                    image: "/placeholder.svg?height=450&width=300",
                    rating: "7.7",
                    year: "2024",
                    genre: "Drama",
                },
                {
                    title: "Challengers",
                    image: "/placeholder.svg?height=450&width=300",
                    rating: "7.6",
                    year: "2024",
                    genre: "Drama",
                },
                {
                    title: "The Ministry of Ungentlemanly Warfare",
                    image: "/placeholder.svg?height=450&width=300",
                    rating: "6.8",
                    year: "2024",
                    genre: "Action",
                },
                {
                    title: "Furiosa: A Mad Max Saga",
                    image: "/placeholder.svg?height=450&width=300",
                    rating: "8.1",
                    year: "2024",
                    genre: "Action",
                },
                ].map((movie, index) => (
                <Card key={index} class="movie-card">
                    <div class="movie-poster-container">
                    <Image
                        src={movie.image || "/placeholder.svg"}
                        alt={movie.title}
                        width={300}
                        height={450}
                        class="movie-poster"
                    />
                    <div class="movie-rating">
                        <Badge variant="secondary" class="rating-badge">
                        <Star class="rating-star" />
                        {movie.rating}
                        </Badge>
                    </div>
                    </div>
                    <CardContent class="movie-card-content">
                    <h3 class="movie-title">{movie.title}</h3>
                    <div class="movie-details">
                        <span>{movie.year}</span>
                        <span>{movie.genre}</span>
                    </div>
                    </CardContent>
                </Card>
                ))}
            </div>
            <div class="view-all-container">
                <Button variant="outline" class="view-all-button">
                View All Movies
                <ChevronRight class="button-icon-right" />
                </Button>
            </div>
            </TabsContent>
            <TabsContent value="action" class="tabs-content">
            <div class="movie-grid">
                {[
                {
                    title: "Godzilla x Kong: The New Empire",
                    image: "/placeholder.svg?height=450&width=300",
                    rating: "7.8",
                    year: "2024",
                    genre: "Action",
                },
                {
                    title: "The Fall Guy",
                    image: "/placeholder.svg?height=450&width=300",
                    rating: "7.5",
                    year: "2024",
                    genre: "Action",
                },
                {
                    title: "The Ministry of Ungentlemanly Warfare",
                    image: "/placeholder.svg?height=450&width=300",
                    rating: "6.8",
                    year: "2024",
                    genre: "Action",
                },
                {
                    title: "Furiosa: A Mad Max Saga",
                    image: "/placeholder.svg?height=450&width=300",
                    rating: "8.1",
                    year: "2024",
                    genre: "Action",
                },
                ].map((movie, index) => (
                <Card key={index} class="movie-card">
                    <div class="movie-poster-container">
                    <Image
                        src={movie.image || "/placeholder.svg"}
                        alt={movie.title}
                        width={300}
                        height={450}
                        class="movie-poster"
                    />
                    <div class="movie-rating">
                        <Badge variant="secondary" class="rating-badge">
                        <Star class="rating-star" />
                        {movie.rating}
                        </Badge>
                    </div>
                    </div>
                    <CardContent class="movie-card-content">
                    <h3 class="movie-title">{movie.title}</h3>
                    <div class="movie-details">
                        <span>{movie.year}</span>
                        <span>{movie.genre}</span>
                    </div>
                    </CardContent>
                </Card>
                ))}
            </div>
            </TabsContent>
            <TabsContent value="comedy" class="tabs-content">
            <div class="movie-grid">
                {[
                {
                    title: "Ghostbusters: Frozen Empire",
                    image: "/placeholder.svg?height=450&width=300",
                    rating: "7.2",
                    year: "2024",
                    genre: "Comedy",
                },
                ].map((movie, index) => (
                <Card key={index} class="movie-card">
                    <div class="movie-poster-container">
                    <Image
                        src={movie.image || "/placeholder.svg"}
                        alt={movie.title}
                        width={300}
                        height={450}
                        class="movie-poster"
                    />
                    <div class="movie-rating">
                        <Badge variant="secondary" class="rating-badge">
                        <Star class="rating-star" />
                        {movie.rating}
                        </Badge>
                    </div>
                    </div>
                    <CardContent class="movie-card-content">
                    <h3 class="movie-title">{movie.title}</h3>
                    <div class="movie-details">
                        <span>{movie.year}</span>
                        <span>{movie.genre}</span>
                    </div>
                    </CardContent>
                </Card>
                ))}
            </div>
            </TabsContent>
            <TabsContent value="drama" class="tabs-content">
            <div class="movie-grid">
                {[
                {
                    title: "Civil War",
                    image: "/placeholder.svg?height=450&width=300",
                    rating: "7.7",
                    year: "2024",
                    genre: "Drama",
                },
                {
                    title: "Challengers",
                    image: "/placeholder.svg?height=450&width=300",
                    rating: "7.6",
                    year: "2024",
                    genre: "Drama",
                },
                ].map((movie, index) => (
                <Card key={index} class="movie-card">
                    <div class="movie-poster-container">
                    <Image
                        src={movie.image || "/placeholder.svg"}
                        alt={movie.title}
                        width={300}
                        height={450}
                        class="movie-poster"
                    />
                    <div class="movie-rating">
                        <Badge variant="secondary" class="rating-badge">
                        <Star class="rating-star" />
                        {movie.rating}
                        </Badge>
                    </div>
                    </div>
                    <CardContent class="movie-card-content">
                    <h3 class="movie-title">{movie.title}</h3>
                    <div class="movie-details">
                        <span>{movie.year}</span>
                        <span>{movie.genre}</span>
                    </div>
                    </CardContent>
                </Card>
                ))}
            </div>
            </TabsContent>
        </Tabs>
        </div>
    </section>
    <section class="coming-soon-section">
        <div class="container">
        <div class="section-header">
            <div class="section-title-container">
            <h2 class="section-title">Coming Soon</h2>
            <p class="section-description">Get a sneak peek at the most anticipated upcoming releases</p>
            </div>
        </div>
        <div class="featured-movie">
            <Image
            src="/placeholder.svg?height=600&width=400"
            width={500}
            height={750}
            alt="Deadpool & Wolverine"
            class="featured-movie-image"
            />
            <div class="featured-movie-info">
            <div class="featured-movie-header">
                <Badge variant="outline" class="release-date-badge">
                Coming July 26, 2024
                </Badge>
                <h3 class="featured-movie-title">Deadpool & Wolverine</h3>
                <p class="featured-movie-description">
                Shawn Levy directs Ryan Reynolds and Hugh Jackman in Marvel Studios' Deadpool & Wolverine. The film
                reunites Deadpool with Wolverine for their first appearance in the Marvel Cinematic Universe.
                </p>
            </div>
            <div class="featured-movie-actions">
                <Button variant="outline">Watch Trailer</Button>
                <Button variant="ghost">Add to Watchlist</Button>
            </div>
            </div>
        </div>
        <div class="movie-grid">
            {[
            {
                title: "Inside Out 2",
                image: "/placeholder.svg?height=450&width=300",
                date: "June 14, 2024",
                genre: "Animation",
            },
            {
                title: "A Quiet Place: Day One",
                image: "/placeholder.svg?height=450&width=300",
                date: "June 28, 2024",
                genre: "Horror",
            },
            {
                title: "Twisters",
                image: "/placeholder.svg?height=450&width=300",
                date: "July 19, 2024",
                genre: "Action",
            },
            {
                title: "Alien: Romulus",
                image: "/placeholder.svg?height=450&width=300",
                date: "August 16, 2024",
                genre: "Sci-Fi",
            },
            ].map((movie, index) => (
            <Card key={index} class="movie-card">
                <div class="movie-poster-container">
                <Image
                    src={movie.image || "/placeholder.svg"}
                    alt={movie.title}
                    width={300}
                    height={450}
                    class="movie-poster"
                />
                <div class="movie-genre">
                    <Badge>{movie.genre}</Badge>
                </div>
                </div>
                <CardContent class="movie-card-content">
                <h3 class="movie-title">{movie.title}</h3>
                <div class="movie-details">
                    <span>{movie.date}</span>
                </div>
                </CardContent>
            </Card>
            ))}
        </div>
        </div>
    </section>
    <section class="premium-section">
        <div class="container">
        <div class="premium-content">
            <div class="premium-info">
            <div class="premium-badge">Premium Access</div>
            <h2 class="premium-title">Watch new releases before anyone else</h2>
            <p class="premium-description">
                Upgrade to our premium plan and get early access to the latest blockbusters before they're available
                to everyone else.
            </p>
            <Button class="premium-button">Upgrade Now</Button>
            </div>
            <div class="family-plan-info">
            <div class="premium-badge">Family Plan</div>
            <p class="premium-description">
                Share the experience with your loved ones. Our family plan allows up to 5 users to enjoy unlimited
                streaming on multiple devices simultaneously.
            </p>
            <Button variant="outline">Learn More</Button>
            </div>
        </div>
        </div>
    </section>
    </main>