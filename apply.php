<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Jobs description">
  <meta name="keywords" content="Jobs, Cybersecurity,">
  <meta name="author" content="#">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apply | Vangarde</title>
  <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
  <?php include 'header.inc'; ?>
  
  <div class="container">
    <section class="apply">
      <!-- Form uses CSS Grid/Flexbox layout via styles.css -->
      <form id="applicationForm" action="formtest.php" method="post" novalidate>
        <fieldset class="form-grid">
          <legend>Applicant Details</legend> <!-- inline CSS example (minimal) -->
    
          <!-- Job reference number: exactly 5 alphanumerics -->
          <div class="form-row">
            <label for="jobRef">Job reference number</label>
            <input type="text" id="jobRef" name="jobRef" inputmode="latin" autocomplete="off"
              pattern="^[A-Za-z0-9]{5}$" minlength="5" maxlength="5" required
              aria-describedby="jobRefHint" />
            <small id="jobRefHint" class="hint">Exactly 5 letters/numbers (e.g., A1B2C).</small>
          </div>
    
          <!-- First name: max 20 alphabetic characters -->
          <div class="form-row">
            <label for="firstName">First name</label>
            <input type="text" id="firstName" name="firstName" autocomplete="given-name"
              pattern="^[A-Za-z]{1,20}$" maxlength="20" required
              title="Only letters, up to 20 characters" />
          </div>
    
          <!-- Last name: max 20 alphabetic characters -->
          <div class="form-row">
            <label for="lastName">Last name</label>
            <input type="text" id="lastName" name="lastName" autocomplete="family-name"
              pattern="^[A-Za-z]{1,20}$" maxlength="20" required
              title="Only letters, up to 20 characters" />
          </div>
    
          <!-- Date of birth: dd/mm/yyyy -->
          <div class="form-row">
            <label for="dob">Date of birth</label>
            <input type="text" id="dob" name="dob" placeholder="dd/mm/yyyy"
              pattern="^\d{2}/\d{2}/\d{4}$" inputmode="numeric" required
              title="Use format dd/mm/yyyy (e.g., 01/09/2001)" />
          </div>
    
          <!-- Gender: radio buttons (fieldset + legend) -->
          <fieldset class="form-rowradios">
            <legend>Gender</legend>
            <div class="radio-group" role="radiogroup" aria-label="Gender">
              <label><input type="radio" name="gender" value="female" required /> Female</label>
              <label><input type="radio" name="gender" value="male" /> Male</label>
              <label><input type="radio" name="gender" value="nonbinary" /> Non‑binary</label>
              <label><input type="radio" name="gender" value="prefer-not" /> Prefer not to say</label>
            </div>
          </fieldset>
    
          <!-- Street Address: max 40 chars -->
          <div class="form-row">
            <label for="street">Street Address</label>
            <input type="text" id="street" name="street" maxlength="40" required autocomplete="address-line1" />
          </div>
    
          <!-- Suburb/Town: max 40 chars -->
          <div class="form-row">
            <label for="suburb">Suburb/Town</label>
            <input type="text" id="suburb" name="suburb" maxlength="40" required autocomplete="address-level2" />
          </div>
    
          <!-- State: dropdown of Australian states/territories -->
          <div class="form-row">
            <label for="state">State</label>
            <select id="state" name="state" required>
              <option value="" selected disabled>Choose…</option>
              <option>VIC</option>
              <option>NSW</option>
              <option>QLD</option>
              <option>NT</option>
              <option>WA</option>
              <option>SA</option>
              <option>TAS</option>
              <option>ACT</option>
            </select>
          </div>
    
          <!-- Postcode: exactly 4 digits -->
          <div class="form-row">
            <label for="postcode">Postcode</label>
            <input type="text" id="postcode" name="postcode" inputmode="numeric"
              pattern="^\d{4}$" minlength="4" maxlength="4" required
              title="Exactly 4 digits" />
          </div>
    
          <!-- Email: valid format -->
          <div class="form-row">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" autocomplete="email" required />
          </div>
    
          <!-- Phone number: 8–12 digits -->
          <div class="form-row">
            <label for="phone">Phone number</label>
            <input type="tel" id="phone" name="phone" inputmode="tel"
              pattern="^\d{8,12}$" minlength="8" maxlength="12" required
              title="Digits only, 8–12 in total" />
          </div>
    
          <!-- Skill list: checkboxes, last item must read "Other skills…" -->
          <fieldset class="form-rowcheckboxes">
            <legend>Skill list</legend>
            <div class="checkbox-group">
              <label><input type="checkbox" name="skills[]" value="html" required /> HTML</label>
              <label><input type="checkbox" name="skills[]" value="css" /> CSS</label>
              <label><input type="checkbox" name="skills[]" value="js" /> JavaScript</label>
              <label><input type="checkbox" name="skills[]" value="git" /> Git/GitHub</label>
              <label><input type="checkbox" name="skills[]" value="comm" /> Communication</label>
              <label><input type="checkbox" name="skills[]" value="other" /> Other skills…</label>
            </div>
          </fieldset>
    
          <!-- Other skills textarea (NOT required per brief) -->
          <div class="form-row full">
            <label for="otherSkills">Other skills</label>
            <textarea id="otherSkills" name="otherSkills" rows="4" maxlength="300" placeholder="Add any additional skills (optional)"></textarea>
          </div>
    
          <div class="form-actions">
            <button type="submit" class="btn-success">Submit Application</button>
            <button type="reset" class="btn-danger">Clear</button>
          </div>
        </fieldset>
      </form>
    </section>
  </div>

  <?php include 'footer.inc'; ?>
  <!-- Tiny progressive enhancement: prevent submitting if no checkbox is ticked (helps some UAs) -->
  <script>
    const form = document.getElementById('applicationForm');
    form.addEventListener('submit', (ev) => {
      const anySkill = form.querySelector('input[name="skills[]"]:checked');
      if (!anySkill) {
        alert('Please select at least one Skill.');
        ev.preventDefault();
      }
    });
  </script>
</body>

</html>