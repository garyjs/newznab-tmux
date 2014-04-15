<?php
require_once(dirname(__FILE__)."/../bin/config.php");
require_once(WWW_DIR.'/lib/Tmux.php');
require_once('functions.php');
/**
 * Class TraktTv
 * Lookup information from trakt.tv using their API.
 */
Class TraktTv
{
	private $APIKEY;

	/**
	 * Construct. Set up API key.
	 */
	function __construct()
	{
		$t = new Tmux();
		$tmux = $t->get();
		$this->APIKEY = $tmux->trakttvkey;
		$this->functions = new Functions();
	}

	/**
	 * Fetches summary from trakt.tv for the TV show using the title/season/episode.
	 *
	 * @param string $title
	 * @param string $season
	 * @param string $ep
	 *
	 * @return bool|mixed
	 */
	public function traktTVSEsummary($title = '', $season = '', $ep = '')
	{
		if (!empty($this->APIKEY)) {
			$TVjson = $this->functions->getUrl(
				'http://api.trakt.tv/show/episode/summary.json/' .
				$this->APIKEY . '/' .
				str_replace(array(' ', '_', '.'), '-', $title) . '/' .
				str_replace(array('S', 's'), '', $season) . '/' .
				str_replace(array('E', 'e'), '', $ep)
			);

			if ($TVjson !== false) {
				return json_decode($TVjson, true);
			}
		}
		return false;
	}

	/**
	 * Fetches summary from trakt.tv for the movie.
	 * Accept a title (the-big-lebowski-1998), a IMDB id, or a TMDB id.
	 *
	 * @param string $movie Title or IMDB id.
	 * @param bool $array   Return the full array or just the IMDB id.
	 *
	 * @return bool|mixed
	 */
	public function traktMoviesummary($movie = '', $array=false)
	{
		if (!empty($this->APIKEY)) {
			$MovieJson = $this->functions->getUrl(
				'http://api.trakt.tv/movie/summary.json/' .
				$this->APIKEY .
				'/' .
				str_replace(array(' ', '_', '.'), '-',  str_replace(array('(', ')'), '', $movie))
			);

			if ($MovieJson !== false) {
				$MovieJson = json_decode($MovieJson, true);
				if (isset($MovieJson['status']) && $MovieJson['status'] === 'failure') {
					return false;
				}


				if ($array) {
					return $MovieJson;
				} elseif (isset($MovieJson["imdb_id"])) {
					return $MovieJson["imdb_id"];
				}
			}
		}
		return false;
	}
}