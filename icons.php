<?php
/**
 * The actual icons. Currently loaded from this file.
 */

return array(

// Miscellaneous
'special-points' => array(
    'page'=>'rules:special_points',
    'title'=>'Special point',
    'image'=>'special.png',
    'aliases'=>array('special-point')
),
'gas-mass' => array(
    'page'=>'rules:gas_mass',
    'title'=>'Gas mass',
    'image'=>'mass-gas.png',
    'aliases'=>array()
),
'rock-mass' => array(
    'page'=>'rules:rock_mass',
    'title'=>'Rock mass',
    'image'=>'mass-rock.png',
    'aliases'=>array()
),
'bio-mass' => array(
    'page'=>'rules:bio_mass',
    'title'=>'Bio mass',
    'image'=>'mass-bio.png',
    'aliases'=>array()
),

'cold-orbit' => array(
    'page'=>'rules:cold_orbit',
    'title'=>'Cold Orbit',
    'image'=>'orbit-cold.png',
    'aliases'=>array()
),
'goldilocks-orbit' => array(
    'page'=>'rules:goldilocks_orbit',
    'title'=>'Goldilocks Orbit',
    'image'=>'orbit-gold.png',
    'aliases'=>array('gold-orbit')
),
'hot-orbit' => array(
    'page'=>'rules:hot_orbit',
    'title'=>'Hot Orbit',
    'image'=>'orbit-hot.png',
    'aliases'=>array()
),
'lunar-orbit' => array(
    'page'=>'rules:lunar_orbit',
    'title'=>'Lunar Orbit',
    'image'=>'orbit-lunar.png',
    'aliases'=>array()
),


// Overlays
'in' => array(
    'title'=>'In',
    'image'=>'in.png',
    'aliases'=>array('immigration','plus')
),
'out' => array(
    'title'=>'Out',
    'image'=>'out.png',
    'aliases'=>array('emigration','min')
),
'specialised' => array(
    'title'=>'Specialised',
    'image'=>'specialised.png',
    'aliases'=>array('corp')
),
'labour' => array(
    'title'=>'Labour',
    'image'=>'labour.png',
    'aliases'=>array('industry')
),

// bases
'tax' => array(
    'page'=>'rules:taxes',
    'title'=>'Taxes',
    'image'=>'tax.png',
    'aliases'=>array()
),
'turns' => array(
    'page'=>'rules:turn',
    'title'=>'Turns',
    'image'=>'turns.png',
    'aliases'=>array('turn')
),
'sector' => array(
    'page'=>'rules:sectors',
    'title'=>'Sector',
    'image'=>'hex-distance.png',
    'aliases'=>array('hex')
),
'population' => array(
    'page'=>'rules:population',
    'title'=>'Population',
    'image'=>'population.png',
    'aliases'=>array('pop')
),
'power' => array(
    'page'=>'rules:power',
    'title'=>'Power',
    'image'=>'power.png',
    'aliases'=>array()
),
'construction-materials' => array(
    'page'=>'rules:construction_materials',
    'title'=>'Construction Materials (2 Metals)',
    'image'=>'product-construction-materials.png',
    'aliases'=>array('conmats')
),
'consumer-goods' => array(
    'page'=>'rules:consumer_goods',
    'title'=>'Consumer Goods (Metals, Organics)',
    'image'=>'product-consumer-goods.png',
    'aliases'=>array('congoods')
),
'electronics' => array(
    'page'=>'rules:electronics',
    'title'=>'Electronics (2 Crystals)',
    'image'=>'product-electronics.png',
    'aliases'=>array()
),
'entertainment' => array(
    'page'=>'rules:entertainment',
    'title'=>'Entertainment (2 Information)',
    'image'=>'product-entertainment.png',
    'aliases'=>array()
),
'exotic-matter-devices' => array(
    'page'=>'rules:exotic_matter_devices',
    'title'=>'Exotic Matter Devices (2 Rare Elements)',
    'image'=>'product-exotic-matter-devices.png',
    'aliases'=>array('emds')
),
'food' => array(
    'page'=>'rules:food',
    'title'=>'Food (2 Organics)',
    'image'=>'product-food.png',
    'aliases'=>array()
),
'healthcare-products' => array(
    'page'=>'rules:healthcare_products',
    'title'=>'Healthcare Products (Organics, Rare Elements)',
    'image'=>'product-healthcare-products.png',
    'aliases'=>array('healthcare')
),
'ict-technology' => array(
    'page'=>'rules:ict_technology',
    'title'=>'Ict Technology (Information, Crystals)',
    'image'=>'product-ict-technology.png',
    'aliases'=>array('ict')
),
'research' => array(
    'page'=>'rules:research',
    'title'=>'Research (Rare Elements, Information)',
    'image'=>'product-research.png',
    'aliases'=>array()
),
'utilities' => array(
    'page'=>'rules:utilities',
    'title'=>'Utilities (2 Gasses)',
    'image'=>'product-utilities.png',
    'aliases'=>array()
),
'vehicles' => array(
    'page'=>'rules:vehicles',
    'title'=>'Vehicles (Gasses, Metals)',
    'image'=>'product-vehicles.png',
    'aliases'=>array()
),
'weapons' => array(
    'page'=>'rules:weapons',
    'title'=>'Weapons (Crystals, Gasses)',
    'image'=>'product-weapons.png',
    'aliases'=>array()
),
'crystals' => array(
    'page'=>'rules:crystals',
    'title'=>'Crystals',
    'image'=>'raw-crystals.png',
    'aliases'=>array()
),
'gasses' => array(
    'page'=>'rules:gasses',
    'title'=>'Gasses',
    'image'=>'raw-gasses.png',
    'aliases'=>array('gas')
),
'information' => array(
    'page'=>'rules:information',
    'title'=>'Information',
    'image'=>'raw-information.png',
    'aliases'=>array()
),
'metals' => array(
    'page'=>'rules:metals',
    'title'=>'Metals',
    'image'=>'raw-metals.png',
    'aliases'=>array()
),
'organics' => array(
    'page'=>'rules:organics',
    'title'=>'Organics',
    'image'=>'raw-organics.png',
    'aliases'=>array()
),
'rare-elements' => array(
    'page'=>'rules:rare_elements',
    'title'=>'Rare Elements',
    'image'=>'raw-rare-elements.png',
    'aliases'=>array('rares')
),

'trade-capacity' => array(
    'page'=>'rules:trade',
    'title'=>'Trade Capacity',
    'image'=>'trade-capacity.png',
    'aliases'=>array('tradecap')
),
'fleet-trade' => array(
    'page'=>'rules:trade#trading_with_trade_fleets',
    'title'=>'Fleet Trade Capacity',
    'image'=>'fleet-trade.png',
    'aliases'=>array('cargo')
),
'holonet-trade' => array(
    'page'=>'rules:trade#trading_through_the_holonet',
    'title'=>'Holonet Trade Capacity',
    'image'=>'holonet-trade.png',
    'aliases'=>array('holo-trade','bandwidth')
),
'open-market-trade' => array(
    'page'=>'rules:trade#trading_with_the_open_market',
    'title'=>'Open Market Trade Capacity',
    'image'=>'open-market-trade.png',
    'aliases'=>array('om-trade')
),

'mass-transit-cargo-freighters' => array(
    'page'=>'rules:mass_transit_cargo_freighters',
    'title'=>'Mass Transit Cargo Freighters',
    'image'=>'special-mass-transit-cargo-freighters.png',
    'aliases'=>array('mtcf','freighters')
),
'holonet-relays' => array(
    'page'=>'rules:holonet relays',
    'title'=>'Holonet Relays',
    'image'=>'special-holonet-relays.png',
    'aliases'=>array()
),
'hyperspace-nodes'=>array(
    'page'=>'rules:hyperspace_nodes',
    'title'=>'Hyperspace Nodes',
    'image'=>'special-hyperspace-nodes.png',
    'aliases'=>array()
),
'terraformation-modules'=>array(
    'page'=>'rules:terraformation_modules',
    'title'=>'Terraformation Modules',
    'image'=>'special-terraformation-modules.png',
    'aliases'=>array('terraform')
),
'capital-ships'=>array(
    'page'=>'rules:capital_ships',
    'title'=>'Capital Ships',
    'image'=>'special-capital-ships.png',
    'aliases'=>array()
),
'superstructure-components'=>array(
    'page'=>'rules:superstructure_components',
    'title'=>'Superstructure Components',
    'image'=>'special-superstructure-components.png',
    'aliases'=>array('components')
),

// combat icons
'outer-offence'=>array(
    'page'=>'rules:rings_of_defence',
    'title'=>'Outer Ring Attack',
    'image'=>'ring-attack-outer.png',
    'aliases'=>array('outer-attack')
),
'middle-offence'=>array(
    'page'=>'rules:rings_of_defence',
    'title'=>'Middle Ring Attack',
    'image'=>'ring-attack-middle.png',
    'aliases'=>array('middle-attack')
),
'inner-offence'=>array(
    'page'=>'rules:rings_of_defence',
    'title'=>'Inner Ring Attack',
    'image'=>'ring-attack-inner.png',
    'aliases'=>array('inner-attack')
),
'outer-defence'=>array(
    'page'=>'rules:rings_of_defence',
    'title'=>'Outer Ring Defence',
    'image'=>'ring-defence-outer.png',
    'aliases'=>array()
),
'middle-defence'=>array(
    'page'=>'rules:rings_of_defence',
    'title'=>'Middle Ring Defence',
    'image'=>'ring-defence-middle.png',
    'aliases'=>array()
),
'inner-defence'=>array(
    'page'=>'rules:rings_of_defence',
    'title'=>'Inner Ring Defence',
    'image'=>'ring-defence-inner.png',
    'aliases'=>array()
),

// financial icons
'credits'=>array(
    'page'=>'rules:credits',
    'title'=>'Generic Credits',
    'image'=>'credit.png',
    'aliases'=>array('creds')
),
'kelwaraan-credits'=>array(
    'page'=>'rules:credits',
    'title'=>'Kelwaraan Credits',
    'image'=>'credit-kelwaraan.png',
    'aliases'=>array('kelwaraans','k-creds')
),

);
