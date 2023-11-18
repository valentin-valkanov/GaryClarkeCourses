USE `doctrine-demo`;

INSERT INTO artist (name) VALUES ('The Beatles'), ('Wings');

INSERT INTO songs (name, file_location, artist_id) VALUES ('Hey Jude', '/pat/to/hey-jude.mp)', 1);
INSERT INTO songs (name, file_location, artist_id) VALUES ('Jet', '/pat/to/jet.mp3)', 2);

INSERT INTO playlists(name, category) VALUES ('The Best of Wings...and The Beatles', 'pop');
INSERT INTO playlists(name, category) VALUES ('1970s Rock Classic', 'rock');

INSERT INTO playlist_song(playlist_id, song_id) VALUES (1, 1);
INSERT INTO playlist_song(playlist_id, song_id) VALUES (1, 2);