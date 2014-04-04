<table> 
    <tr>
    	<th class="metabox_label_column">
        	Schema Business Classification
        </th>
        <td>
        	<?php $selected = @get_post_meta($post->ID, 'schema_classification', true); ?>
        	<p><select name="schema_classification" id="schema_classification">
            	<option value="LocalBusiness"<?php echo (($selected=="LocalBusiness")?' selected="selected"':'')?>>Default (Local Business)</option>
               	<option value="AnimalShelter"<?php echo (($selected=="AnimalShelter")?' selected="selected"':'')?>>Animal Shelter</option>
                <option value="AutomotiveBusiness"<?php echo (($selected=="AutomotiveBusiness")?' selected="selected"':'')?>>Automotive Business</option>
					<option value="AutoBodyShop"<?php echo (($selected=="AutoBodyShop")?' selected="selected"':'')?>>&nbsp;&nbsp;Auto Body Shop</option>
                    <option value="AutoDealer"<?php echo (($selected=="AutoDealer")?' selected="selected"':'')?>>&nbsp;&nbsp;Auto Dealer</option>
                    <option value="AutoPartsStore"<?php echo (($selected=="AutoPartsStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Auto Parts Store</option>
                    <option value="AutoRental"<?php echo (($selected=="AutoRental")?' selected="selected"':'')?>>&nbsp;&nbsp;Auto Rental</option>
                    <option value="AutoRepair"<?php echo (($selected=="AutoRepair")?' selected="selected"':'')?>>&nbsp;&nbsp;Auto Repair</option>
                    <option value="AutoWash"<?php echo (($selected=="AutoWash")?' selected="selected"':'')?>>&nbsp;&nbsp;Auto Wash</option>
                    <option value="GasStation"<?php echo (($selected=="GasStation")?' selected="selected"':'')?>>&nbsp;&nbsp;Gas Station</option>
                    <option value="MotorcycleDealer"<?php echo (($selected=="MotorcycleDealer")?' selected="selected"':'')?>>&nbsp;&nbsp;Motorcycle Dealer</option>
                    <option value="MotorcycleRepair"<?php echo (($selected=="MotorcycleRepair")?' selected="selected"':'')?>>&nbsp;&nbsp;Motorcycle Repair</option>
                <option value="ChildCare"<?php echo (($selected=="ChildCare")?' selected="selected"':'')?>>Child Care</option>
                <option value="DryCleaningOrLaundry"<?php echo (($selected=="DryCleaningOrLaundry")?' selected="selected"':'')?>>Dry Cleaning Or Laundry</option>
                <option value="EmergencyService"<?php echo (($selected=="EmergencyService")?' selected="selected"':'')?>>Emergency Service</option>
                	<option value="FireStation"<?php echo (($selected=="FireStation")?' selected="selected"':'')?>>&nbsp;&nbsp;Fire Station</option>
                    <option value="Hospital"<?php echo (($selected=="Hospital")?' selected="selected"':'')?>>&nbsp;&nbsp;Hospital</option>
                    <option value="PoliceStation"<?php echo (($selected=="PoliceStation")?' selected="selected"':'')?>>&nbsp;&nbsp;Police Station</option>
                <option value="EmploymentAgency"<?php echo (($selected=="EmploymentAgency")?' selected="selected"':'')?>>Employment Agency</option>
                <option value="EntertainmentBusiness"<?php echo (($selected=="EntertainmentBusiness")?' selected="selected"':'')?>>Entertainment Business</option>
                	<option value="AdultEntertainment"<?php echo (($selected=="AdultEntertainment")?' selected="selected"':'')?>>&nbsp;&nbsp;Adult Entertainment</option>
                    <option value="AmusementPark"<?php echo (($selected=="AmusementPark")?' selected="selected"':'')?>>&nbsp;&nbsp;Amusement Park</option>
                    <option value="ArtGallery"<?php echo (($selected=="ArtGallery")?' selected="selected"':'')?>>&nbsp;&nbsp;Art Gallery</option>
                    <option value="Casino"<?php echo (($selected=="Casino")?' selected="selected"':'')?>>&nbsp;&nbsp;Casino</option>
                    <option value="ComedyClub"<?php echo (($selected=="ComedyClub")?' selected="selected"':'')?>>&nbsp;&nbsp;Comedy Club</option>
                    <option value="MovieTheater"<?php echo (($selected=="MovieTheater")?' selected="selected"':'')?>>&nbsp;&nbsp;Movie Theater</option>
                    <option value="NightClub"<?php echo (($selected=="NightClub")?' selected="selected"':'')?>>&nbsp;&nbsp;Night Club</option>
                <option value="FinancialService"<?php echo (($selected=="FinancialService")?' selected="selected"':'')?>>Financial Service</option>
                	<option value="AccountingService"<?php echo (($selected=="AccountingService")?' selected="selected"':'')?>>&nbsp;&nbsp;Accounting Service</option>
                    <option value="AutomatedTeller"<?php echo (($selected=="AutomatedTeller")?' selected="selected"':'')?>>&nbsp;&nbsp;Automated Teller</option>
                    <option value="BankOrCreditUnion"<?php echo (($selected=="BankOrCreditUnion")?' selected="selected"':'')?>>&nbsp;&nbsp;Bank Or Credit Union</option>
                    <option value="InsuranceAgency"<?php echo (($selected=="InsuranceAgency")?' selected="selected"':'')?>>&nbsp;&nbsp;Insurance Agency</option>
                <option value="FoodEstablishment"<?php echo (($selected=="FoodEstablishment")?' selected="selected"':'')?>>Food Establishment</option>
                	<option value="Bakery"<?php echo (($selected=="Bakery")?' selected="selected"':'')?>>&nbsp;&nbsp;Bakery</option>
                    <option value="BarOrPub"<?php echo (($selected=="BarOrPub")?' selected="selected"':'')?>>&nbsp;&nbsp;Bar Or Pub</option>
                    <option value="Brewery"<?php echo (($selected=="Brewery")?' selected="selected"':'')?>>&nbsp;&nbsp;Brewery</option>
                    <option value="CafeOrCoffeeShop"<?php echo (($selected=="CafeOrCoffeeShop")?' selected="selected"':'')?>>&nbsp;&nbsp;Cafe Or Coffee Shop</option>
                    <option value="FastFoodRestaurant"<?php echo (($selected=="FastFoodRestaurant")?' selected="selected"':'')?>>&nbsp;&nbsp;Fast Food Restaurant</option>
                    <option value="IceCreamShop"<?php echo (($selected=="IceCreamShop")?' selected="selected"':'')?>>&nbsp;&nbsp;Ice Cream Shop</option>
                    <option value="Restaurant"<?php echo (($selected=="Restaurant")?' selected="selected"':'')?>>&nbsp;&nbsp;Restaurant</option>
                    <option value="Winery"<?php echo (($selected=="Winery")?' selected="selected"':'')?>>&nbsp;&nbsp;Winery</option>
                <option value="GovernmentOffice"<?php echo (($selected=="GovernmentOffice")?' selected="selected"':'')?>>Government Office</option>
                	<option value="PostOffice"<?php echo (($selected=="PostOffice")?' selected="selected"':'')?>>&nbsp;&nbsp;Post Office</option>
                <option value="HealthAndBeautyBusiness"<?php echo (($selected=="HealthAndBeautyBusiness")?' selected="selected"':'')?>>Health And Beauty Business</option>
                    <option value="BeautySalon"<?php echo (($selected=="BeautySalon")?' selected="selected"':'')?>>&nbsp;&nbsp;Beauty Salon</option>
                    <option value="DaySpa"<?php echo (($selected=="DaySpa")?' selected="selected"':'')?>>&nbsp;&nbsp;Day Spa</option>
                    <option value="HairSalon"<?php echo (($selected=="HairSalon")?' selected="selected"':'')?>>&nbsp;&nbsp;Hair Salon</option>
                    <option value="HealthClub"<?php echo (($selected=="HealthClub")?' selected="selected"':'')?>>&nbsp;&nbsp;Health Club</option>
                    <option value="NailSalon"<?php echo (($selected=="NailSalon")?' selected="selected"':'')?>>&nbsp;&nbsp;Nail Salon</option>
                    <option value="TattooParlor"<?php echo (($selected=="TattooParlor")?' selected="selected"':'')?>>&nbsp;&nbsp;Tattoo Parlor</option>
                <option value="HomeAndConstructionBusiness"<?php echo (($selected=="HomeAndConstructionBusiness")?' selected="selected"':'')?>>Home And Construction Business</option>
                	<option value="Electrician"<?php echo (($selected=="Electrician")?' selected="selected"':'')?>>&nbsp;&nbsp;Electrician</option>
                    <option value="GeneralContractor"<?php echo (($selected=="GeneralContractor")?' selected="selected"':'')?>>&nbsp;&nbsp;General Contractor</option>
                    <option value="HVACBusiness"<?php echo (($selected=="HVACBusiness")?' selected="selected"':'')?>>&nbsp;&nbsp;HVAC Business</option>
                    <option value="HousePainter"<?php echo (($selected=="HousePainter")?' selected="selected"':'')?>>&nbsp;&nbsp;House Painter</option>
                    <option value="Locksmith"<?php echo (($selected=="Locksmith")?' selected="selected"':'')?>>&nbsp;&nbsp;Locksmith</option>
                    <option value="MovingCompany"<?php echo (($selected=="MovingCompany")?' selected="selected"':'')?>>&nbsp;&nbsp;Moving Company</option>
                    <option value="Plumber"<?php echo (($selected=="Plumber")?' selected="selected"':'')?>>&nbsp;&nbsp;Plumber</option>
                    <option value="RoofingContractor"<?php echo (($selected=="RoofingContractor")?' selected="selected"':'')?>>&nbsp;&nbsp;Roofing Contractor</option>
                <option value="InternetCafe"<?php echo (($selected=="InternetCafe")?' selected="selected"':'')?>>Internet Cafe</option>
                <option value="Library"<?php echo (($selected=="Library")?' selected="selected"':'')?>>Library</option>
                <option value="LodgingBusiness"<?php echo (($selected=="LodgingBusiness")?' selected="selected"':'')?>>Lodging Business</option>
                	<option value="BedAndBreakfast"<?php echo (($selected=="replace")?' selected="selected"':'')?>>&nbsp;&nbsp;Bed And Breakfast</option>
                    <option value="Hostel"<?php echo (($selected=="Hostel")?' selected="selected"':'')?>>&nbsp;&nbsp;Hostel</option>
                    <option value="Hotel"<?php echo (($selected=="Hotel")?' selected="selected"':'')?>>&nbsp;&nbsp;Hotel</option>
                    <option value="Motel"<?php echo (($selected=="Motel")?' selected="selected"':'')?>>&nbsp;&nbsp;Motel</option>
               	<option value="MedicalOrganization"<?php echo (($selected=="MedicalOrganization")?' selected="selected"':'')?>>Medical Organization</option>
                	<option value="Dentist"<?php echo (($selected=="Dentist")?' selected="selected"':'')?>>&nbsp;&nbsp;Dentist</option>
                    <option value="DiagnosticLab"<?php echo (($selected=="DiagnosticLab")?' selected="selected"':'')?>>&nbsp;&nbsp;Diagnostic Lab</option>
                    <option value="Hospital"<?php echo (($selected=="Hospital")?' selected="selected"':'')?>>&nbsp;&nbsp;Hospital</option>
                    <option value="MedicalClinic"<?php echo (($selected=="MedicalClinic")?' selected="selected"':'')?>>&nbsp;&nbsp;Medical Clinic</option>
                    <option value="Optician"<?php echo (($selected=="Optician")?' selected="selected"':'')?>>&nbsp;&nbsp;Optician</option>
                    <option value="Pharmacy"<?php echo (($selected=="Pharmacy")?' selected="selected"':'')?>>&nbsp;&nbsp;Pharmacy</option>
                    <option value="Physician"<?php echo (($selected=="Physician")?' selected="selected"':'')?>>&nbsp;&nbsp;Physician</option>
                    <option value="VeterinaryCare"<?php echo (($selected=="VeterinaryCare")?' selected="selected"':'')?>>&nbsp;&nbsp;Veterinary Care</option>
                <option value="ProfessionalService"<?php echo (($selected=="ProfessionalService")?' selected="selected"':'')?>>Professional Service</option>
                    <option value="AccountingService"<?php echo (($selected=="AccountingService")?' selected="selected"':'')?>>&nbsp;&nbsp;Accounting Service</option>
                    <option value="Attorney"<?php echo (($selected=="Attorney")?' selected="selected"':'')?>>&nbsp;&nbsp;Attorney</option>
                    <option value="Dentist"<?php echo (($selected=="Dentist")?' selected="selected"':'')?>>&nbsp;&nbsp;Dentist</option>
                    <option value="Electrician"<?php echo (($selected=="Electrician")?' selected="selected"':'')?>>&nbsp;&nbsp;Electrician</option>
                  	<option value="GeneralContractor"<?php echo (($selected=="GeneralContractor")?' selected="selected"':'')?>>&nbsp;&nbsp;General Contractor</option>
                    <option value="HousePainter"<?php echo (($selected=="HousePainter")?' selected="selected"':'')?>>&nbsp;&nbsp;House Painter</option>
                    <option value="Locksmith"<?php echo (($selected=="Locksmith")?' selected="selected"':'')?>>&nbsp;&nbsp;Locksmith</option>
                    <option value="Notary"<?php echo (($selected=="Notary")?' selected="selected"':'')?>>&nbsp;&nbsp;Notary</option>
                    <option value="Plumber"<?php echo (($selected=="Plumber")?' selected="selected"':'')?>>&nbsp;&nbsp;Plumber</option>
                    <option value="RoofingContractor"<?php echo (($selected=="RoofingContractor")?' selected="selected"':'')?>>&nbsp;&nbsp;Roofing Contractor</option>
                <option value="RadioStation"<?php echo (($selected=="RadioStation")?' selected="selected"':'')?>>Radio Station</option>
                <option value="RealEstateAgent"<?php echo (($selected=="RealEstateAgent")?' selected="selected"':'')?>>Real Estate Agent</option>
                <option value="RecyclingCenter"<?php echo (($selected=="RecyclingCenter")?' selected="selected"':'')?>>Recycling Center</option>
                <option value="SelfStorage"<?php echo (($selected=="SelfStorage")?' selected="selected"':'')?>>Self Storage</option>
                <option value="ShoppingCenter"<?php echo (($selected=="ShoppingCenter")?' selected="selected"':'')?>>Shopping Center</option>
                	<option value="BowlingAlley"<?php echo (($selected=="BowlingAlley")?' selected="selected"':'')?>>&nbsp;&nbsp;Bowling Alley</option>
                   	<option value="ExerciseGym"<?php echo (($selected=="ExerciseGym")?' selected="selected"':'')?>>&nbsp;&nbsp;Exercise Gym</option>
                    <option value="GolfCourse"<?php echo (($selected=="GolfCourse")?' selected="selected"':'')?>>&nbsp;&nbsp;Golf Course</option>
                    <option value="HealthClub"<?php echo (($selected=="HealthClub")?' selected="selected"':'')?>>&nbsp;&nbsp;Health Club</option>
                    <option value="PublicSwimmingPool"<?php echo (($selected=="PublicSwimmingPool")?' selected="selected"':'')?>>&nbsp;&nbsp;Public Swimming Pool</option>
                    <option value="SkiResort"<?php echo (($selected=="SkiResort")?' selected="selected"':'')?>>&nbsp;&nbsp;Ski Resort</option>
                    <option value="SportsClub"<?php echo (($selected=="SportsClub")?' selected="selected"':'')?>>&nbsp;&nbsp;Sports Club</option>
                    <option value="StadiumOrArena"<?php echo (($selected=="StadiumOrArena")?' selected="selected"':'')?>>&nbsp;&nbsp;Stadium Or Arena</option>
                    <option value="TennisComplex"<?php echo (($selected=="TennisComplex")?' selected="selected"':'')?>>&nbsp;&nbsp;Tennis Complex</option>
                <option value="SportsActivityLocation"<?php echo (($selected=="SportsActivityLocation")?' selected="selected"':'')?>>Sports Activity Location</option>
                <option value="Store"<?php echo (($selected=="Store")?' selected="selected"':'')?>>Store</option>
                	<option value="AutoPartsStore"<?php echo (($selected=="AutoPartsStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Auto Parts Store</option>
                    <option value="BikeStore"<?php echo (($selected=="BikeStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Bike Store</option>
                    <option value="BookStore"<?php echo (($selected=="BookStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Book Store</option>
                    <option value="ClothingStore"<?php echo (($selected=="ClothingStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Clothing Store</option>
                    <option value="ComputerStore"<?php echo (($selected=="ComputerStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Computer Store</option>
                    <option value="ConvenienceStore"<?php echo (($selected=="ConvenienceStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Convenience Store</option>
                    <option value="DepartmentStore"<?php echo (($selected=="DepartmentStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Department Store</option>
                    <option value="ElectronicsStore"<?php echo (($selected=="ElectronicsStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Electronics Store</option>
                    <option value="Florist"<?php echo (($selected=="Florist")?' selected="selected"':'')?>>&nbsp;&nbsp;Florist</option>
                    <option value="FurnitureStore"<?php echo (($selected=="FurnitureStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Furniture Store</option>
                    <option value="GardenStore"<?php echo (($selected=="GardenStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Garden Store</option>
                    <option value="GroceryStore"<?php echo (($selected=="GroceryStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Grocery Store</option>
                    <option value="HardwareStore"<?php echo (($selected=="HardwareStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Hardware Store</option>
                    <option value="HobbyShop"<?php echo (($selected=="HobbyShop")?' selected="selected"':'')?>>&nbsp;&nbsp;Hobby Shop</option>
                    <option value="HomeGoodsStore"<?php echo (($selected=="HomeGoodsStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Home Goods Store</option>
                    <option value="JewelryStore"<?php echo (($selected=="JewelryStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Jewelry Store</option>
                    <option value="LiquorStore"<?php echo (($selected=="LiquorStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Liquor Store</option>
                    <option value="MensClothingStore"<?php echo (($selected=="MensClothingStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Mens Clothing Store</option>
                    <option value="MobilePhoneStore"<?php echo (($selected=="MobilePhoneStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Mobile Phone Store</option>
                    <option value="MovieRentalStore"<?php echo (($selected=="MovieRentalStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Movie Rental Store</option>
                    <option value="MusicStore"<?php echo (($selected=="MusicStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Music Store</option>
                    <option value="OfficeEquipmentStore"<?php echo (($selected=="OfficeEquipmentStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Office Equipment Store</option>
                    <option value="OutletStore"<?php echo (($selected=="OutletStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Outlet Store</option>
                    <option value="PawnShop"<?php echo (($selected=="PawnShop")?' selected="selected"':'')?>>&nbsp;&nbsp;Pawn Shop</option>
                    <option value="PetStore"<?php echo (($selected=="PetStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Pet Store</option>
                    <option value="ShoeStore"<?php echo (($selected=="ShoeStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Shoe Store</option>
                    <option value="SportingGoodsStore"<?php echo (($selected=="SportingGoodsStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Sporting Goods Store</option>
                    <option value="TireShop"<?php echo (($selected=="TireShop")?' selected="selected"':'')?>>&nbsp;&nbsp;Tire Shop</option>
                    <option value="ToyStore"<?php echo (($selected=="ToyStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Toy Store</option>
                    <option value="WholesaleStore"<?php echo (($selected=="WholesaleStore")?' selected="selected"':'')?>>&nbsp;&nbsp;Wholesale Store</option>
                <option value="TelevisionStation"<?php echo (($selected=="TelevisionStation")?' selected="selected"':'')?>>Television Station</option>
                <option value="TouristInformationCenter"<?php echo (($selected=="TouristInformationCenter")?' selected="selected"':'')?>>Tourist Information Center</option>
                <option value="TravelAgency"<?php echo (($selected=="TravelAgency")?' selected="selected"':'')?>>Travel Agency</option>
            </select>
            <span class="note">If you're unsure on your <a href="http://schema.org/LocalBusiness" targer="_blank">Business Type</a>, simply leave this as default</span></p>
        </td>
	</tr>
    <tr>
    	<th class="metabox_label_column">
        	Opening Hours
        </th>
        <td>
        	<?php $display_closed = @get_post_meta($post->ID, 'display_closed', true); ?>
        	<p><select name="display_closed" id="display_closed"> 
            	<option value="0"<?php echo (($display_closed=="0")?' selected="selected"':'')?>>Hide Closed Days</option>
                <option value="1"<?php echo (($display_closed=="1")?' selected="selected"':'')?>>Show Closed Days</option>
            </select></p>
		</td>
	</tr>      
</table>