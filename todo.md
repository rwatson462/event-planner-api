# To-do list

1. Figure out how to extend Blade to make a `@feature()` block as a wrapper around feature flags. Example:
   ```php
   @feature('events')
     <div>Some thing with events</div>
   @endfeature
   ```
   
2. Use Commands and Queries (CQRS) for managing data and events
3. Add simple form builder
4. Add role to users
   1. admin, event-organiser, event-guest
   2. Users can have multiple roles
   3. Add a dropdown in the top bar to switch role
5. Create "organisations" when signing up to create events
6. Allow inviting other users to administer events
7. Add create event form
   1. name, description, cover image, number of guests, date/time
   2. Add "public" flag to show on public pages
   3. Ability to add guests by name only
8. Add public event page
9. Add RSVP to events - manual toggle + invitation via email
10. Guest self-invitation (need a name for this)
    1. guest can view event on public page
    2. add toggle to event to allow public signups
    3. guest can sign up via public page
