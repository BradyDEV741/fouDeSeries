CREATE TABLE `serie` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `resume` longtext DEFAULT NULL,
  `premiereDiffusion` date DEFAULT NULL,
  `nbEpisodes` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `serie`
(`id`, `titre`, `resume`, `premiereDiffusion`, `nbEpisodes`, `image`)
VALUES

(1, 'L''Éternaute',
 'Après une mystérieuse chute de neige mortelle, un groupe de survivants tente de comprendre ce qui est arrivé à Buenos Aires.',
 '2025-04-30',
 6,
 'https://images.unsplash.com/photo-1519608487953-e999c86e7455'),

(2, 'Asura',
 'À Tokyo en 1979, quatre sœurs découvrent la liaison de leur père et voient leurs relations familiales profondément bouleversées.',
 '2025-01-09',
 7,
 'https://images.unsplash.com/photo-1529156069898-49953e39b3ac'),

(3, 'The Leopard',
 'En Sicile au XIXe siècle, un prince aristocrate voit son monde bouleversé par les changements politiques et sociaux.',
 '2025-03-05',
 6,
 'https://images.unsplash.com/photo-1533105079780-92b9be482077'),

(4, 'The Åre Murders',
 'Une policière se rend dans une station de ski suédoise et enquête sur la disparition mystérieuse d''une jeune fille.',
 '2025-02-06',
 6,
 'https://images.unsplash.com/photo-1486911278844-a81c5267e227'),

(5, 'Karma',
 'Plusieurs personnes liées par un événement dramatique voient leurs destins se croiser dans une affaire criminelle complexe.',
 '2025-04-04',
 6,
 'https://images.unsplash.com/photo-1485846234645-a62644f84728'),

(6, 'Senna',
 'Cette série retrace la carrière et la vie du célèbre pilote automobile brésilien Ayrton Senna.',
 '2025-05-30',
 6,
 'https://images.unsplash.com/photo-1503736334956-4c8f8e92946d'),

(7, 'The Testaments',
 'Dans une société dystopique, deux jeunes femmes grandissent sous le régime de Gilead et cherchent à comprendre leur passé.',
 '2026-04-08',
 10,
 'https://images.unsplash.com/photo-1511497584788-876760111969'),

(8, 'How to Get to Heaven from Belfast',
 'Trois amies de Belfast se retrouvent après la mort suspecte d''une ancienne camarade et cherchent à comprendre ce qui s''est passé.',
 '2026-02-12',
 8,
 'https://images.unsplash.com/photo-1500534623283-312aade485b7'),

(9, 'Young Sherlock',
 'En 1871, un jeune Sherlock Holmes arrive à Oxford et se retrouve impliqué dans une enquête criminelle.',
 '2026-03-04',
 8,
 'https://images.unsplash.com/photo-1516979187457-637abb4f9353'),

(10, 'Queen of Mars',
 'Une mission spatiale entraîne un groupe d''explorateurs dans une aventure aux conséquences inattendues sur Mars.',
 '2026-07-01',
 8,
 'https://images.unsplash.com/photo-1614728263952-84ea256f9679'),

(11, 'The Flaws',
 'Une histoire familiale et professionnelle met en lumière les difficultés d''un groupe de personnes confrontées à leurs différences.',
 '2026-04-15',
 6,
 'https://images.unsplash.com/photo-1521737711867-e3b97375f902'),

(12, 'Burden of Justice',
 'Des enquêteurs suédois tentent de résoudre une affaire complexe tout en affrontant les conséquences de leurs décisions.',
 '2026-05-01',
 6,
 'https://images.unsplash.com/photo-1453873531674-2151bcd01707');