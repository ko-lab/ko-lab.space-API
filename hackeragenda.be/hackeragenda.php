<?php /* Template Name: HACKERAGENDA */
    # all functions beginning with "eo_" is a part of the WordPress "event organiser" plugin

    $events = eo_get_events(array(
    # only events from our location: Potterijstraat
          'event-venue'=>"ko-lab-potterij",
          'showpastevents'=>true,//Will be deprecated, but set it to true to play it safe.
    ));
    # Use 'var_dump()' to troubleshoot arrays
    # var_dump($events);

    # Need to count down number of events to NOT include a ',' in the last key-value pair.
    $i = 0;
    $len = count($events);

    # echoing the Hackeragenda API JSON object.
    echo '{"org": "Ko-Lab","api": 0.1,"events": [';
    if($events):
        # iterate over every event from our events
        foreach ($events as $event):
            # get if it the event is all day
            $allday = (eo_is_all_day($event->ID) ? "true" : "false");
            # get time format
            $format = "Y-m-d H:i:00";
            # echo all needed data from the event
            echo '{"title": "'.get_the_title($event->ID).'",
                "start": "'.eo_get_the_start($format, $event->ID,null,$event->occurrence_id).'",
                "all_day":"'.$allday.'",
                "url": "'.get_permalink($event_id = $event->ID , $occurrence_id = false)."?id=".$event->occurrence_id.'",
                "location": "'.eo_get_venue_name($venue_slug_or_id = 'ko-lab-potterij').'"';
                # last iteration no ',' at the end of the JSON object
                if ($i == $len - 1):
                    echo '}';
                else:
                    echo '},';
                endif;
                $i++;
        endforeach;
    endif;
    echo ']}';
?>
