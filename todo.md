# To-do list

* [x] Figure out how to extend Blade to make a `@feature()` block as a wrapper around feature flags. Example:
   ```php
   @feature('events')
     <div>Some thing with events</div>
   @endfeature
   ```
* [ ] Create Feature blocking middleware, something like `middleware('feature:events')` to attach to routes
* [ ] Use Commands and Queries (CQRS) for managing data and events
* [ ] Add simple form builder
* [ ] Add role to users
   1. admin, event-organiser, event-guest
   2. Users can have multiple roles
   3. Add a dropdown in the top bar to switch role
* [ ] Create "organisations" when signing up to create events
* [ ] Allow inviting other users to administer events
* [ ] Add create event form
   1. name, description, cover image, number of guests, date/time
   2. Add "public" flag to show on public pages
   3. Ability to add guests by name only
* [ ] Add public event page
* [ ] Add RSVP to events - manual toggle + invitation via email
* [ ] Guest self-invitation (need a name for this)
    1. guest can view event on public page
    2. add toggle to event to allow public signups
    3. guest can sign up via public page
* [ ] Share events
    1. user clicks a share button to show a link that they can pass on to others
    2. landing page for "shared events" with text along the lines of "so-and-so has shared this with you, click to view"
    3. track opening of links through visits to the sahred event page


Subscription!
Service is free to use for "simple" events - events with name/desc/start/end
User can upgrade to "pro" to add ticket numbers, sell tickets, etc
