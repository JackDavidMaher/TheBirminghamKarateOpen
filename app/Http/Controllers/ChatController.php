<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
    public function send(Request $request)
    {
        $type = $request->input('type');
        #$userInput = $request->input('prompt');
        $userInput = 'Exploring the Historic Heart of South Wales: A Journey from Lake
Country House
Nestled on the serene banks of the River Irfon near Builth Wells, Lake
Country House Hotel & Spa offers a wonderfully relaxed base for exploring
Wales’s rich tapestry of history. The hotel itself dates back to 1840 when it
was a hunting and fishing lodge — a living piece of Welsh heritage amidst
lakes, woodland, and rolling countryside. Lake Country House Hotel
While you could happily spend mornings strolling the grounds and afternoons
unwinding in the spa, the surrounding region beckons with centuries of
stories, ruins, and architectural marvels. From grand medieval castles to
immersive museums and ancient heritage sites, here’s how to turn your stay
into a captivating historical adventure.
Majestic Castles — Icons of Welsh History
Wales is famed for its castles, and many of the most impressive and accessible
are within reasonable drive or public-transport distance from Lake Country
House.
Cardiff Castle
4.6•Castle•Closed
Standing proudly in the heart of Cardiff, this castle combines Roman,
Norman, and Victorian features. Its dramatic interiors and battlements tell
the story of nearly 2,000 years of history, and it’s easily reachable by train or
bus from mid-Wales. From medieval fortifications to lavish Victorian redesigns
by the Marquess of Bute, this is Wales’s most visited historical site.
Caerphilly Castle
4.7•Castle•Open
Often dubbed one of the largest fortresses in Britain, this sprawling 13th-
century stronghold features massive water defenses and towering curtain
walls. Perfect for families or history lovers, it’s a great half-day trip and
reachable by public transport from Cardiff.
Raglan Castle
4.7•Tourist attraction•Open
A dramatic late medieval fortress near Usk, Raglan Castle showcases grand
living spaces alongside defensive walls. The site combines residential comfort
with serious military architecture — an ideal stop on a scenic drive across
South Wales.
Margam Castle
4.6•Castle•Open
Located near Port Talbot, Margam is a Victorian Gothic revival mansion
surrounded by extensive parkland. While later in date than medieval
fortresses, its sweeping design and landscaped grounds are evocative of
Wales’s 19th-century historical culture.
Ogmore Castle & Castell Coety
Near Bridgend, these two adjacent castles — one first built in Norman times
and the other a medieval fortified manor — offer a quieter, more atmospheric
experience of Welsh feudal history.
Historic Gems Worth Exploring
Smaller, evocative ruins like Pennard Castle on the Gower coast or
Newcastles Castle in Bridgend provide evocative insights into medieval
Wales and make for delightful short excursions.
Tretower Court and Castle — A Medieval Manor Experience
Llys a Chastell Tre-tŵr / Tretower Court and Castle in Crickhowell is a
unique heritage site combining a Norman castle with a magnificent 14th-
century fortified manor house. Here, restored halls, chambers, and gardens
evoke the transition from medieval warfare to domestic life. It’s particularly
atmospheric and offers excellent walks and interpretation trails for visitors.
Living History: Museums and Immersive Sites
Not all historical experiences require ancient stone walls. South Wales is rich
in places where history comes alive.
St. Fagans National Museum of History (Cardiff)
4.7•History museum•Open
One of the UK’s most remarkable open-air museums, St. Fagans brings Welsh
history to life with reconstructed buildings, craft demonstrations, and
interactive galleries. From Tudor farmhouses to Victorian schools, this
National Museum of Wales site is a must-visit for culture lovers.
Cyfarthfa Castle Museum and Art Gallery (Merthyr Tydfil)
4.6•Tourist attraction•Open
Housed in a magnificent 19th-century mansion once owned by iron-making
magnate William Crawshay, this museum explores the industrial heritage of
South Wales alongside fine art collections — perfect for a day trip by car or
bus.
Llancaiach Fawr Manor
4.7•Tourist attraction•Closed
Step back into the Tudor era at this beautifully preserved manor house near
Treharris. Costumed guides and authentic interiors offer a vivid sense of life in
1619, complete with gardens and period furnishings.
Abergavenny Museum
4.5•Museum•Closed
Combining local archaeology, medieval history, and town heritage, this
welcoming museum sits beside Abergavenny’s historic castle remains — an
easy addition to a historic town visit.
Castell Coch — A Fairy-Tale Gothic Revival
King Arthur might have lived here. Castell Coch sits amid the woods above
Tongwynlais near Cardiff, a reconstructed 19th-century castle built on
medieval foundations in ornate Gothic Revival style. Its turreted towers and
lavish interior feel straight from legend. Wikipedia
Ancient and Quirky Historical Sites
If you’re intrigued by history older than castles, South Wales has prehistoric
and early historic sites worth seeking out. Near Cardiff, burial chambers like
Tinkinswood and St Lythans date back nearly 6,000 years and can be visited
as part of a broader archaeological exploration. Reddit
Tips for Travel and Exploration
 By car: South Wales’s patchwork of roads makes castle-hopping and
country touring easy and scenic. Locations like Cardiff Castle, St. Fagans,
and Raglan are straightforward day trips.
 By train: Regular rail services connect mid-Wales to Cardiff and
Swansea, opening up major sites like Cardiff Castle and museum hubs
without needing to drive.
 By bus: Local bus networks and tour operators link towns such as
Merthyr Tydfil and Abergavenny to nearby historical attractions.
Pro tip: Many castles and heritage sites have seasonal opening schedules, so
check ahead before planning your visit.
Final Thought
Whether you’re a history buff curious about medieval life, a family seeking
atmospheric ruins, or a culture lover after immersive experiences, South
Wales has layers of history waiting to be explored. And Lake Country House
Hotel & Spa sits beautifully at the crossroads of nature and heritage — a
perfect home base to experience the stories carved into Welsh stone and
landscape.
        ';
        $userPromptHotel = 'You are a marketing expert who works for luxury hotel brands. One of your clients is Hotel Penzance Collection, and they need to add some content to their website. They have asked for your help to adapt the text theyve added. Please read the content already on the site and provide suggestions on how they could change the content being added to make it align with the pages already on the site and have a cohesive tone and style across the site and pages.
        
        Content being added to Home Page: ' . $userInput . ' 
        
        Content on site:
        Home Page: 
        Stay in one of our Hotel Penzance Collection Hotels or Houses 
        Choose your room in Hotel Penzance Harbour View, Hotel Penzance Promenade or Beach Houses, Marazion
        The sea is the ever-present backdrop to most of our quality boutique accommodation offering the perfect place to unwind and relax in complete comfort. Enjoy panoramic views of Penzance Harbour and across Long Rock beach to the iconic St Michaels Mount in Marazion, with interiors inspired by these beautiful seascapes.

        All our tastefully refreshed rooms have en suite bathrooms, soft sheets and complete calm, while many enjoy uninterrupted sea views. Some are dog-friendly, whilst others have enough space for all the family. Additional beds and/or cots can be added upon prior request.
        The Beach Club Hotel, Large Panorama Bedroom
        Compare Rooms & Rates

        View rates and rooms in our range of boutique accommodation with sea views. Whether travelling as a solo traveller, couple or family our rooms are stylish, clean and available for all your needs. Choose to stay at Hotel Penzance Harbour View, Hotel Penzance Promenade or The Beach House in Marazion.
        COMPARE ROOMS & RATES
        room
        Hotel Penzance Harbour View

        Hotel Penzance Harbour View is a 4 Star townhouse hotel with a highly-acclaimed restaurant and swimming pool in the West of Cornwall. Originally two merchant houses in the 1920s and dating back to Edwardian times, the townhouse today combines traditional elegance with modern style and comfort. We even have our own guest host to ensure your stay is top-notch, from ensuring you have all you need, to sharing Cornwalls best-kept secrets.
        HARBOUR VIEW ROOMS
        Beach club hotel bedroom
        Hotel Penzance Promenade

        Hotel Penzance Promenade (formerly The Beach Club Hotel) has soaring sea views of Mounts Bay. From the Lizard Peninsula to Newlyn Harbour and across to St Michaels Mount. Most of our rooms overlook the sea, infused with its unique light.

        Find us in historic Penzance. Like the town, we are crafted by the coast and the generations of creatives it has inspired. The hotel walls are filled with works of original artists. Were nestled in the heart of the promenade, ten minutes from the centre.
        PROMENADE ROOMS
        Beach House Kitchen
        Beach Houses, Marazion

        Located above The Surf Club restaurant and inspired by the coastal beauty of Marazion, the first of our Beach Houses is The Beach House, a new stylish self-catering apartment, perfect for families of up to five to get together.

        With all your amenities taken care of, concentrate on quality time catching up and getting the good times rolling.
        THE BEACH HOUSE
        Dog-friendly accommodation

        At the Hotel Penzance Collection, we offer a range of dog-friendly accommodation in Penzance and Marazion from our boutique hotels to self-catering Beach Houses and apartments. 

        For a small additional charge we welcome well behaved dogs and offer a dog bed, bowls, poop bags and towel for when the Cornish weather is a little inclement. You can also opt for a luxury upgrade that includes a hamper for your best friend. 
        
        Blog Page:

        Penzance to Lamorna Cove – Why This South West Coast Path Stretch Belongs On Your List

        Stretch your legs and explore the rugged beauty of the Cornish Coast on this impressive stretch of the South West Path. Keep reading to discover why Penzance to Lamorna Cove is one of the best South West Coast Path walks in Cornwall, or check out other great walks in the area in our blog The best Salt Path Walks. 
        Route Overview: Distance, Difficulty and Highlights

        Covering just under six miles in total, walking from Hotel Penzance to Lamorna Cove is a challenging yet manageable way to spend a day exploring the coast. 

        The stretch from Penzance to Mousehole lets you find your stride, enjoying a gentle amble along the seafront, before you take things up a notch on the more challenging stretch from Mousehole to Lamorna. Here, the path becomes more undulating with rocky sections underfoot. 

        The walk only takes around two and a half to three hours to complete, but with stops for refreshments or even lunch, and time to soak up the stunning views at Kemyel Crease and Penzer Point, its easy to make a day of it. 

        There are numerous cafes in Mousehole where you can enjoy a drink and a slice of cake, while the café at Lamorna Cove is famous for its crab specialities and Cornish cream tea. 
        Stage 1: Penzance to Newlyn to Mousehole 

        The first section of the walk takes you from Penzance through Newlyn and on into Mousehole, a charming seaside village brimming with traditional Cornish character. 

        Youll head south past the docks and South Pier and round Battery Rocks, before taking the path towards Newlyn. Youll pass Wherrytown beach, backed by Newlyn Green and the Newlyn Art Gallery, should you wish to make an arty detour, and the Bolitho Gardens before reaching Newlyn.

        In Newlyn, youll see yachts and fishing boats bobbing in the water along Mounts Bay, but the town is also home to an art gallery and a good selection of pubs and restaurants if you need refreshments. 

        As you leave Newlyn, youll pass the lighthouse to Penlee Point before coming into Mousehole, a picturesque fishing village with a lovely harbour and sandy beach. Mousehole is also home to several art galleries, gift shops, cafés, and pubs, so you can have a pitstop before continuing to Lamorna Cove.
        Stage 2: Mousehole to Lamorna Cove 

        As you leave Moushole, the path becomes more challenging with a narrow, rocky single-track path through Kemyel Crease Nature Reserve. With short, steep sections, care is needed, especially near Penzer Point, but the payoff is stunning views of the coastline.

        The path in this section can be muddy and is uneven, so wearing stout footwear is recommended. 

        At just over two miles long, this section is much shorter, but due to the more challenging nature of the path, you should give yourself a good hour to reach Lamorna Cove. 
        Arriving at Lamorna Cove: Facilities, Parking and Safety Notes

        After traversing one of the rockier sections of the South West Path, youll arrive in Lamorna Cove. A hidden gem, it will captivate you with its rugged beauty, dramatic cliffs and crescent-shaped beach. Just be sure to check tide times, so you can make the most of the beach and stay safe.

        Known for its tranquility, there arent many facilities here, but you can get a delicious lunch at Lamorna Cove Café. Originally opened as an ice cream shop in the 1950s, it is now famed for its fresh crab specialties.
        Getting Back: Buses and Simple Returns 

        Although you can walk back the way you came, the M6 runs frequently between Mousehole, Newlyn and Penzance. While a more limited weekday 347 service takes you right to Lamorna village.
        Map, Wayfinding and Route Changes 

        Although the South West Path is well marked with National Trail acorn signposts guiding you along the way, you should also carry an OS map or have the map downloaded on your phone in case you do go off track. Its also helpful should there be any temporary diversion in place en route that you need to navigate around. 

        You can find out more about any planned diversions on the South West Coast Path website.  
        Extend Your Day: On to Porthcurno or Inland Stone Circles 

        To extend the walk from Lamorna Cove, continue along the coastal path to Porthcurno, where you can visit the famous Minack Theatre, one of the most magical outdoor theatres in the UK. From here, you can continue further from Porthcurno to Lands End and visit the most westerly point of England. 

        Or if youd prefer to head inland, visit the Merry Maidens, an ancient stone circle dating back to the Stone Age.

        Both options to extend the walk traverse tougher terrain with more rocky sections, so its best to wear stout footwear and take care with your footing. We also recommend researching the best routes on sites like Walking Britain before you set off.
        Where to Stay: Start Strong From Hotel Penzance 

        Hotel Penzance is the ideal base for a walking holiday in Cornwall. With close proximity to the promenade and stunning sea views, our hotel is perfectly positioned for you to make the most of the South West Coast Path in Penzance, as well as offering easy access to bus routes, for point-to-point routes.

        Whats more, at Hotel Penzance, you can relax with a post-walk dip in our heated outdoor pool, before enjoying a sumptuous meal in our restaurant and settling down for the evening in our comfortably appointed rooms. 

        
        Book Your Coastal Break 

        If youre keen to enjoy this route or other coastal walks from Penzance, book your break now.


        When providing suggestions on how to improve the content being added to The Home Page, please only rewrite the content being added. ENSURE YOUR RESPONSE ONLY INCLUDES THE IMPROVED REWRITTEN CONTENT!!!';

        $userPromptSport = 'You are a marketing expert who works for a University Sports Facilities. One of your clients is The University of Birminghams Sport and Fitness, and they need to add some content to their website. They have asked for your help to adapt the text theyve added. Please read the content already on the site and provide suggestions on how they could change the content being added to make it align with the pages already on the site and have a cohesive tone and style across the site and pages.
        
        Content being added to Pool Page: ' . $userInput . ' 
        
        Content on site:
        Sport Page:
        Discover a Sport
        Sport
        University of Birmingham
        With 56 sports to choose from and a huge range of fitness opportunities, there is something for everyone at the University of Birmingham no matter what your current fitness or ability level is!
        From American Football to Ultimate Frisbee, youre sure to find a sport that you love. Whether youre already playing hockey at national level or if you want to start a new sport, this is the perfect opportunity to discover your sporting passion.

        A
        American Football
        Archery
        Athletics & Cross Country
        Aussie Rules

        B
        Badminton
        Basketball (Mens)
        Basketball (Womens)
        Boxing
        Brazilian Jiu Jitsu

        C
        Cheerleading
        Cricket (Mens)
        Cricket (Womens)
        Cycling

        D
        Dodgeball

        E
        Equestrian

        F
        Fencing
        Football (Men’s)
        Football (Womens)

        G
        Gaelic Football
        Golf
        Gymnastics

        H
        Handball
        Hockey

        I
        Ice Hockey

        J
        Jiu Jitsu
        Judo

        K
        Karate
        Kayaking
        Korfball

        L
        Lacrosse
        Lifesaving
        
        M
        Motor Racing
        Mountaineering & Climbing

        N
        Netball
        Ninjutsu

        P
        Polo & Polocrosse
        
        R
        Rowing
        Rugby League
        Rugby Union (Men’s)
        Rugby Union (Women’s)

        S
        Sailing
        Snowsports
        Snooker & Pool
        Squash
        Surfing
        Swimming
        
        T
        Table Tennis
        Taekwondo
        Tennis
        Touch Rugby
        Trampolining
        Triathlon
        
        U
        Ultimate Frisbee
        
        V
        Volleyball
        
        W
        Water Polo
        Weightlifting
        Windsurfing
        Wing Chun Kung Fu

        Gym Facilities Page:

        Inside the Gym
        Membership

        Sport & Fitness
        Inside the Gym

        The gym at University of Birmingham Sport & Fitness offers an unrivalled experience with a huge range of Technogym equipment.
        Upstairs gym area at Sport & Fitness - with lots of equipment including running machines. Along with the UoB Lion on the wall.	
        Sport & Fitness gym area with running machines.	

        Covering two levels, the upper floor contains a range of cardiovascular and resistance machines as well as an area for functional training and stretching. 

        Lower gym area in the Sport & Fitness gym.	

        The lower floor has an extensive range of free weights, Olympic lifting platforms, cable machines and cardio machines for warming up. The gym overlooks the 50-metre swimming pool and has a light, spacious feel.
        More space for your potential

        Plan ahead by taking a look at our quietest times in the gym – getting the most for your workouts.
        Sport and Fitness Gym heatmap showing busy and quiet times.	
        New for 25/26: The Vale

        Now included with your Sport and Fitness Gym membership is access to the brand new student-only 30+ station gym at The Vale.
        Find out more
        Join online & start using the UoB gym
        Join
        Gym Group Training

        These programmed sessions will add variety and all-round body conditioning to your workouts.

        

        

        Very different from group exercise classes, Gym Group Training is designed by personal trainers using cardio equipment, free weights, bodyweight and flexibility exercises.

        

        

        Available to members at Sport & Fitness – both student and non-student – who have classes included in their membership (inclusive membership).
        Timetable
        Gym instructor supporting a member in a group session.	
        Gym Instructor supporting a member in Sport & Fitness gym.	
        Personal Training
        Whether you’re training for an event, looking to lose weight or need to use exercise to manage a health condition, discover what you can achieve with one of our expert personal trainers.

            Bespoke 1-1 sessions
            Expert advice and support
            Lifestyle and nutrition planning

        Enquire now	
        Our Fitness Experts
        A headshot of Peter Antonio a Sport & Fitness Gym Instructor.
        Peter
        Senior Gym Instructor

        Fitness and Wellbeing Specialisms: Bodybuilding, Squash, Cycling and Running

        Peter has a BSc and MSc in Health, Nutrition and Fitness related subjects, and is a Registered Sports Nutritionist (AfN). He worked as a NHS Public Health Nutritionist for four years, with 13 years’ worth of experience in practicing, reading, and writing around meditation practice.

            07588 299468
            P.Antonio@bham.ac.uk

        Wayne Johnson, Gym Supervisor, UoB Sport & Fitness
        Wayne
        Gym Supervisor

        Fitness Specialisms: Physical Rehab, Return from Injury, Chronic Illnesses and Conditions

        Wayne has a background in Sports Therapy with over 10 years at Sport & Fitness. He’s worked with a range of clients of all ages and physical abilities to achieve a broad range of goals, through encouragement, motivation and goal setting.

            W.Johnson@bham.ac.uk

        A headshot of John De Crescenzo, a Sport & Fitness Gym Instructor.
        John
        Gym Supervisor

        Fitness Specialisms: Olympic Weightlifting, Strength & Conditioning

        John trains at Tiverton Gym and was the Strength and Conditioning coach at Coventry University, Warwick Sport and Sheffield Hallam University. With more than 10 years’ experience, he has a Masters in Sport & Exercise Science, is a UKSCA accredited Strength and Conditioning coach and holds a BWL Level 2 qualification.

            J.Crescenzo@bham.ac.uk

        A headshot of Vinay Gagan a Sport & Fitness Gym Instructor.
        Vinay
        Gym Instructor

        Fitness and Wellbeing Specialisms: Fat loss, nutrition & lifestyle coaching, weight training

        Struggling to lose body fat? Vinay offers over 15 years of experience in helping clients achieve sustainable results. By analysing your lifestyle, nutrition, and training, he creates a tailored plan that fits you - no extreme diets, just lasting results. Ready to take the next step? Book a consultation today and see how Vinay can help you reach your goals. Contact him via email below.

            v.gagan@bham.ac.uk

        A headshot of Simon Donovan, a Sport & Fitness Gym Instructor.
        Simon
        Gym Instructor

        Fitness Specialisms: Supporting clients with Type 2 Diabetes, Rheumatoid & Osteo Arthritis

        With 13 years here at Sport & Fitness, Simon has been a personal trainer since 2011, working with clients with a wide range of goals. He holds a first-class degree in Sport & Exercise Science as well as qualifications in Diabetes and Obesity management, Lower back pain and GP referral, and worked as a health wellbeing physiologist undertaking Corporate Health Assessments.

            07540 266621
            S.Donovan@bham.ac.uk

        A headshot of Janine Keeping, a Sport & Fitness Gym Instructor.
        Janine
        Gym Instructor

        Fitness Specialisms: Pre and Post Natal Qualification, Free Weights, Strength and Conditioning, General Toning, HiiT, Weightloss

        Since leaving the Army after 24 years of service, Janine decided to follow her passion for health and fitness by becoming a Personal Trainer. She has the ability to get the best out of people.

            07736 312635
            J.M.Keeping@bham.ac.uk

        A headshot of Mike Watson, a Sport & Fitness Gym Instructor.
        Michael
        Gym Instructor

        Fitness Specialisms: Technique, Short-time Workouts

        With 15 years’ experience, Michael has experimented with a variety of training techniques. His athletics background as a teenager focused on power building and movements.
        Dominika Lichwa-Muhwati, Gym Instructor
        Dominika
        Gym Instructor

        Fitness Specialisms: Injury Management and Rehabilitation of both active and chronic injuries, Strength and Conditioning for Sports Performance and Competition Preparation, and Pre- and Postnatal exercise

        Dominika has a degree in Sports Therapy, Level 3 Personal Training, and Crossfit Level 1. She has a wealth of experience, from competing herself as a National Level Swimmer, to coaching championship Rugby, exposing her to a variety of injuries and elite level strength and conditioning.

            d.lichwa@bham.ac.uk

        A headshot of Aidan Birch, a Sport & Fitness Gym Instructor.
        Aidan
        Gym Instructor

        Fitness Specialisms: Olympic Weightlifting, Strength/Power Training

        A national level competitor in Olympic Weightlifting for 10 years, Aidan has had an interest in bodybuilding and strength training since he was 16 years old. He was the former University of Birmingham Weightlifting club coach.
        Muscle and Weight Analysis
        State-of-the-art equipment is used to establish your overall body fat, muscle and water mass percentages, as well as its distribution around your body. This helps to track how your body reacts to improvements you make to your nutrition and exercise routine. Your height, weight and body mass index will also be measured.
        Enquire Now	
        Hands on a body composition machine	
        Member Benefits
        Join
        Premium Equipment

        200+ stations, including state-of-the-art energy saving treadmills, rowers, spin cycles and a dedicated free weights area
        Gym induction

        Coming to a new gym can be daunting, but we have a video induction plus an optional face-to-face induction for the gym including a special free-weights induction
        Free Programme

        Complete the Technogym Aspiration Map when you join as a community member, and our experts will create a programme suited to your goals
        Personal Training

        Exclusive access to Personal Training bolt-ons at Sport & Fitness. These are an additional cost, please speak with our Fitness Instructors to enquire.
        Gym Areas
        Upper Floor - Cardiovascular & Resistance Machines

            60+ cardiovascular stations, including state-of-the-art energy saving treadmills, rowers, stair climbers and cross-trainers to provide a varied workout
            Wide range of bikes including group cycles, upright and recumbent cycles, Wattbikes and immersive Technogym cycles.
            40+ strength equipment stations including full body resistance and cable machines.

        Lower Floor - Free Weights & Resistance Machines

            Exceptional free weights training facilities including nine lifting bay squat racks
            Three olympic standard benches
            Bench pull station
            Dumbbell station with wide variety of weight variations, up to 30kg.
            Seven adjustable weight benches, including incline and decline variations
            Multipower smith machine
            Assisted dip chin machine
            Target key muscle groups with the military shoulder press, preacher curl bench and standing leg curl stations.
            Environmental-conscious equipment is a key feature of the gym, including self-powered Skill Mills

        Your fitness journey starts now	
        Get Started

        

        When providing suggestions on how to improve the content being added to The Pool Page, please only rewrite the content being added. ENSURE YOUR RESPONSE ONLY INCLUDES THE IMPROVED REWRITTEN CONTENT!!!';
        $userPromptCalifornia = 'You are a marketing expert who works for a luxury hotel. One of your clients is The Hotel California, and they need to add some content to their website. They have asked for your help to adapt the text theyve added. Please read the content already on the site and provide suggestions on how they could change the content being added to make it align with the pages already on the site and have a cohesive tone and style across the site and pages.
        
        Content being added to Pool Page: ' . $userInput . ' 
        
        Content on site:
        Home Page:
        Welcome to Hotel California
        Experience the epitome of luxury and comfort at Hotel California, where every stay is a journey into elegance and exceptional service. Nestled in the heart of California, our hotel offers breathtaking views, world-class amenities, and a commitment to making your visit unforgettable.
        Whether youre here for business or leisure, Hotel California provides the perfect blend of sophistication and relaxation. Our rooms and suites are designed with your comfort in mind, featuring plush furnishings, modern technology, and stunning decor that reflects the vibrant spirit of California.
        Indulge in gourmet dining at our on-site restaurants, unwind at our spa, or take a dip in our rooftop pool while enjoying panoramic views of the city skyline. For those seeking adventure, our concierge team is ready to assist you in exploring the best of what California has to offer.
        At Hotel California, we believe that every guest deserves the highest level of service. Our dedicated staff is committed to ensuring that your stay exceeds your expectations, providing personalized attention and care from the moment you arrive until your departure.
        Discover the perfect destination for your next getaway at Hotel California – where luxury meets comfort and every moment is crafted to perfection. Book your stay with us today and experience the magic of Hotel California.
        Rooms & Suites Page:
        Luxurious Accommodations at Hotel California
        At Hotel California, we pride ourselves on offering a range of luxurious accommodations designed to meet the needs of our discerning guests. Whether youre seeking a cozy room for a solo trip or a spacious suite for a family vacation, we have the perfect option for you.
        Our rooms are thoughtfully designed with elegant decor, plush bedding, and modern amenities to ensure a comfortable and memorable stay. Each room features high-speed Wi-Fi, flat-screen TVs, and stunning views of the city or ocean.
        For those looking for an elevated experience, our suites offer additional space, premium furnishings, and exclusive access to our executive lounge. Enjoy complimentary breakfast, evening hors doeuvres, and personalized concierge services to enhance your stay.
        Hotel California also offers a variety of room types to suit your preferences, including:
            Deluxe Rooms: Perfect for solo travelers or couples, our deluxe rooms provide a cozy and stylish retreat.
            Family Suites: Spacious and comfortable, ideal for families or groups seeking extra space.
            Executive Suites: Luxurious accommodations with premium amenities and exclusive lounge access.
        No matter which accommodation you choose, you can expect exceptional service and attention to detail that will make your stay truly unforgettable. Book your room or suite at Hotel California today and experience the ultimate in luxury and comfort.
        Restaurant & Dining Page:
        Exquisite Dining Experiences at Hotel California
        Indulge in a culinary journey like no other at Hotel Californias renowned restaurants. Our diverse dining options cater to every palate, offering a blend of local flavors and international cuisine crafted by our talented chefs.
        Start your day with a delicious breakfast at our all-day dining restaurant, where youll find a variety of options to fuel your adventures. From fresh pastries and seasonal fruits to hearty breakfast platters, theres something for everyone to enjoy.
        For lunch and dinner, explore our signature restaurant, where you can savor gourmet dishes made from locally sourced ingredients. Our menu features a range of options, from succulent steaks and fresh seafood to vegetarian delights, all paired with an extensive selection of fine wines and craft cocktails.
        Looking for a more casual dining experience? Visit our rooftop bar and lounge, where you can enjoy light bites and refreshing drinks while taking in panoramic views of the city skyline.
        At Hotel California, we are committed to providing exceptional dining experiences that delight the senses and create lasting memories. Reserve your table today and embark on a gastronomic adventure at Hotel California.
        
        

        When providing suggestions on how to improve the content being added to The Pool Page, please only rewrite the content being added. ENSURE YOUR RESPONSE ONLY INCLUDES THE IMPROVED REWRITTEN CONTENT!!!';
        $systemPrompt = 'You are a professional marketer working in advertising businesses. You are an expert in reflecting brand voice in the content you write for websites and can adapt your style to suit different tones and styles of webpages. Your responses to users should only include the rewritten content they have asked for, without any additional commentary or explanation. You should aim for your responses to be similar in length to the content provided by the user unless you strongly believe otherwise.';
        #if ($type === 'HotelPenzance') {
        #    $userPrompt = $userPromptHotel;
        #} elseif ($type === 'UBSport') {
        #    $userPrompt = $userPromptSport;
        #} elseif ($type === 'HotelCalifornia') {
        #    $userPrompt = $userPromptCalifornia;
        #} else {
        #    $userPrompt = $userInput;
        #}

        $userPrompt = 'You are a marketing expert who works for a luxury hotel. One of your clients is Lincombe Hall Hotel & Spa, and they need to add some content to their website. They have asked for your help to adapt the text theyve added. Please read the content already on the site and provide suggestions on how they could change the content being added to make it align with the pages already on the site and have a cohesive tone and style across the site and pages.
        
        Content being added to the Blog Page: ' . $userInput . '
        Content on site:
        Spa Offers Page:
        Local Discount

An exclusive 20% off Spa Days & Spa Breaks for our lovely locals! 

You read that right! TQ, EX & PL discount is back.

Spa Days now from £132 per person

Lets be honest, were all a little upset about Summer being over. The days will slowly start getting darker and the weather colder, however, we dont need to fret just yet. Instead, enjoy the warmth of Lincombe Spa and feel all your worries just disappear.

Promo Code: LOCAL


Terms & Conditions
- You must show proof of your local postcode on arrival. This can either be a driving liscense or utility bill dated in the last 6 months. If you are unable to provide this, you will be asked to pay the difference.
- Not valid with any other offer such as our loyalty vouchers.
- Available until 31st March 2026. Some date restrictions apply such as 23rd December to 2nd January 2025 and 13th to 16th February 2026.
*This offer is not valid for Spa & Dine, Evening Spa Experience, Sparkling Twilight Spa 

August f (3)
Mini Spa Day

A quick escape for relaxation

Our Mini Spa Day includes:

A glass of Prosecco or fruit juice on arrival
A 30 minute treatment from the list below:
- My Kinda Skin Express Facial
- Back, Neck & Shoulder Massage
- Aaahhh! Leg & Foot Energiser
- Executative Footcare*
- Hand & Nail Care* 

A two course meal or afternoon tea in our Brasserie
Full use of heated outdoor swimming pool & jacuzzi**
**Please note, this is between early May to mid September only.

£150 per person, Monday - Thursday 
£165 per person, Friday - Sunday

*These treatments dont include nail polish.
Last-minute bookings only, subject to availability. 
Only available to book over the phone.

Stay Offer Page:
Sunday Get Away

Sunday Escape

Extend your weekend and take advantage of the Sunday Night Getaway offer.

This offer includes:

- Full spa access from check-in to check-out*
- 12pm check-out
- 25% off all food and drink during the stay
- Breakfast on all mornings

So, whether you join us for cocktails in the Spa, a delicious afternoon tea or a Sunday night meal in the Brasserie, you’ll be enjoying some great savings and a relaxing treat to end the weekend.



_

* The spa is closed on Monday mornings, open from 11am. 
Some date exclusions apply. For more information, please call the hotel. 


Girls Friday Night In

Spend Friday night slightly differently

Make the most of your Friday evening with a friend or loved one.

This offer includes:

- Bottle of Prosecco in the room
- Full spa access from check-in to check-out
- 3 course dinner in our Brasserie
- 12pm check-out
- Breakfast in the morning
- 20% off all spa treatments, promo code: RESIDENT  

 

Dont let the name put you off, men are also welcome.

_ 

Some date exclusions apply. For more information, please call the hotel. 


Spa Page:
Award-Winning Spa in Devon 

Our luxury spa is a first for Torquay—with treatments and facilities at the pinnacle of spa tech and knowledge. Everything at Lincombe Spa has been carefully selected to relax you, carrying you to a world of calm. 

It’s so simple: from the moment you arrive we want you to feel totally indulged, relaxed, and immersed in your personal Lincombe Spa experience.
	
Spa Days

Need a reset? Perhaps some time to catch up with friends or quality time with a loved one? Book a Spa Day package at Lincombe and experience the best spa experience in the Bay.

Spa Breaks

Our Spa Break packages are the perfect way to emmerse yourself into the Lincombe lifestyle. Allowing you the opportunity to experience the best of what we have to offer.

Leave feeling completely refreshed. 
	
Facilities

Award-winning facilities consisting of a 13m Hydro Pool, Himalayan Salt Room, fully equppied Gym facilities and so much more.

Open: 7am – 9pm.

(Please be aware that the Spa facilities are closed on Mondays until 11am) 

Spa Treatments

Discover a sense of bliss you didnt think possible with Temple Spa treatments, tailored by our expert therapists to your body. 

Expecting? We have dedicated treatments for pregnancy. 

Lincombe Spa Membership

Lincombe Spa membership offers an exclusive, just for adults, luxury spa experience that will leave you feeling relaxed, revitalised and pampered from top to toe every month.

Limited spaces available.

Spa Offers

Seasonal offers and packages just waiting to be booked! 

Experience Lincome Spa.


Spa Breaks Page:
Spa Breaks in South Devon

A spa break is your time to stop the world. Get off the treadmill, give some time to yourself. Completely.

Breathe. Melt your tension. Escape to peace at Lincombe Spa.

To see which treatments are included, please see our Spa Breaks Brochure just below.

Sauna	
One Night Spa Break
A perfect pick-me-up

A Spa Day helps us getaway from it all and truly relax. Why not extend it into the night and sleep easy? Our One Night Spa Break includes:

    Overnight stay with Breakfast      
    Full access to Lincombe Spa facilities*
    1x 60 minute spa treatment per person
    A Three Course Dinner in the Brasserie                                 

From £217 per person (based on two guests sharing a Cosy King room). 

                

*Full Lincombe Spa access is from check-in at 3pm to check-out at 11am.
	
Two Night Spa Break
Make time for yourself

Why just come for a spa day or treatment when you can float away from the daily grind with a two night Lincombe Spa stay? In a fast world, slow yours down and give yourself time to relax.

Enjoy a two night stay including:

    Overnight stay with Breakfast
    Full access to Lincombe Spa facilities*
    1 x 60 minute spa treatment per person
    1 x 30 minute spa treatment per person  
    A Three Course Dinner on your first night in the Brasserie
    A Lincombe Hall Afternoon Tea per person

From £219.50 per person, per night (based on 2 guests sharing a Cosy King room)  

 

*Full Lincombe Spa access is from check-in at 3pm to check-out at 11am.

Three Night Spa Break
Complete luxury

A spa is a place for rare indulgence and delight... so when it comes to Lincombe Spa, more really is more. This luxurious three night stay will give you all the time you need to  completely relax. Gain all these benefits:

    Overnight stay with Breakfast
    Full access to Lincombe Spa facilities*
    Treatment Options:
    2x 60 minute spa treatments per person
    A Three Course Dinner on your first night in the Brasserie
    Lincombe Hall Afternoon Tea

From £201.50 per person, per night (based on 2 guests sharing a Cosy King room)

 

*Full Lincombe Spa access is from check-in at 3pm to check-out at 11am.

Home Page:

Lincombe Hall Hotel & Spa in Torquay, South Devon

 Melt your tension in our luxury 5 Bubble Spa. Take romantic strolls by the sea.

Be properly spoilt at award-winning Lincombe Hall Hotel & Spa and experience complete indulgence.  
	
a spa like no other
Lincombe Spa

When did you last utterly relax? Our luxury spa is the first of its kind in Torquay. Immerse yourself in wonderfully calm botanical spa treatments. Let the gentle power of our hydro pool soothe your achy muscles. Sleep deeply after a gym session. As one of the most luxurious hotels in Torquay, come to the coast and treat yourself to some real downtime.

Signature room	

The Hotel

We’re a coastal retreat for well-deserved me-time and romantic getaways. A hotel in Torquay thats about forgetting stresses, forgetting demands— and indulging. Good food and drink, comfy rooms, some of the most idyllic scenery in the country. You deserve a break. 

experience lincombe for less
Our Latest Offers

Fancy nipping in the spa with friends before a big night out, need a romantic escape, or simply want to chill out? We have the perfect offers for you.

give the gift of relaxation

Gift Vouchers are available year round at Lincombe Hall Hotel & Spa. With flexible booking options to enjoy complete indulgence any time within 12 months, they are the perfect gift.

Choose from popular spa breaks, spa days and afternoon teas plus monetary vouchers from £10 upwards. Treat your loved one to an experience at one of the most luxurious hotels in Torquay.


Spa Facilities Page:

15m Lap Pool

Our 15m lap pool is a great way to get a relaxing full body workout. Two things that don’t often go together. Floating helps ease muscle tension and the water regulates your temperature—so it doesn’t feel like you’re burning calories. 

13m Hydro Pool

Our 13m hydro pool has 10 different stations, each with air jets—including volcanoes. The 34°C water and pressurised bubbles are therapeutic and perfect for easing your muscles. Afterwards you’ll be filled with endorphins and stress free. 

Scandinavian Sauna

The health benefits of saunas are varied, from easing stress and flushing out toxins to improving respiratory issues. A session in our sauna is perfect after a workout in our gym. 

Aromatherapy Steam Room

The essences we use in our steam room are coconut, orange blossom, eucalyptus, and vanilla. Aromatherapy, first pioneered by the ancient Egyptians, is a way of stimulating your limbic system, where smell and memory combine. It calms you, destresses you, relaxes your muscles, and lifts your mood. 

Himalayan Salt Room

Ever felt sleepy after a trip to the beach? It’s the salty air. Halotherapy is the inhalation of microscopic salt particles, easing your respiration, clearing your sinuses, and clearing your mind. If you suffer from allergies or hay fever this is a brilliant way to give yourself relief. 


Ice Room

You’ll find nothing else like this in Torquay. Our ice room is a next level spa experience based on cold therapy, with an ice fountain and beautiful backlit ice wall. The benefits of cold therapy are numerous, from weight loss to improved circulation and overall health. Do you have the courage to give it a go? 

Fully Equipped Gym

Our gym is the ideal place for your workout—with a range of fitness equipment for toning, resistance training, and cardio.  

Bucket Showers

The bucket shower, also known as the contrast shower is an age-old Tyrolean tradition with many health benefits and is considered an effective hydrotherapy treatment.

Traditionally in Nordic countries the best time for taking a bucket shower is immediately after a sauna, because the body is overheated so gets the greatest benefit from the thermal shock.

When providing suggestions on how to improve the content being added to the Spa Offers Page, please only rewrite the content being added. ENSURE YOUR RESPONSE ONLY INCLUDES THE IMPROVED REWRITTEN CONTENT!!!';
        $response = Http::withToken(config('services.openai.key'))
            ->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-5.1',
                'messages' => [
                    ['role' => 'system', 'content' => $systemPrompt],
                    ['role' => 'user', 'content' => $userPrompt],
                ],
                "temperature" => 1.0
            ]);

        return response()->json([
            'reply' => $response['choices'][0]['message']['content']
        ]);
    }
}