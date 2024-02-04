<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp Share</title>
    <style>
        body {
            background-color: yellow;
            color: black;
        }

        form {
            max-width: 400px;
            margin: auto;
        }

        div {
            margin-left: 20px;
            margin-right: 20px;
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input,
        textarea,
        select {
            border-radius: 10px;
            outline: none;
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 8px;
            color: black;
            background-color: white;
            border: 2px solid black;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div style="display: flex; justify-content: center; margin-top: 10px; margin-bottom: 10px; flex-direction: row; align-items: center; background-color: white; border-radius: 10px;">
        <img src="img/logopek.png" style="height: 70px; width: 70px;">
        <p style="margin-left: 10px; font-weight: bolder; color: black;">PT. Global Energitama</p>
    </div>

    <p style="text-align: center; font-weight: bolder; font-size: 20px; margin-top: 20px; margin-bottom: 30px;">Mechanic Reporting</p>

    <form onsubmit="submitForm(); return false;">
        <div>
            <label for="line1" style="font-weight: bolder;">No. Unit:</label>
            <select id="line1">
                <option value="XCL 3003">XCL 3003</option>
                <option value="XCL 3004">XCL 3004</option>
                <option value="XCL 3005">XCL 3005</option>
                <option value="XCO 3007">XCO 3007</option>
                <option value="XCO 3008">XCO 3008</option>
                <option value="XCO 3009">XCO 3009</option>
                <option value="XCO 3010">XCO 3010</option>
                <option value="XCO 3011">XCO 3011</option>
                <option value="XCO 3012">XCO 3012</option>
                <option value="XCO 3013">XCO 3013</option>
                <option value="XCO 3014">XCO 3014</option>
                <option value="XCO 3015">XCO 3015</option>
                <option value="XCO 3016">XCO 3016</option>
                <option value="XCO 3017">XCO 3017</option>
                <option value="XCO 3018">XCO 3018</option>
                <option value="XCO 3019">XCO 3019</option>
                <option value="XCO 3020">XCO 3020</option>
                <option value="XCO 3021">XCO 3021</option>
                <option value="XCO 3022">XCO 3022</option>
                <option value="XCO 3023">XCO 3023</option>
                <option value="XCO 3024">XCO 3024</option>
                <option value="LV-GET-018">LV-GET-018</option>
                <option value="LV-GET-019">LV-GET-019</option>
                <option value="LV-GET-020">LV-GET-020</option>
                <option value="LV-GET-021">LV-GET-021</option>
                <option value="LV-GET-022">LV-GET-022</option>
            </select>
        </div>

        <div>
            <label for="line2" style="font-weight: bolder;">HM/KM:</label>
            <input type="text" id="line2" />
        </div>

        <div>
            <label for="line3" style="font-weight: bolder;">Problem:</label>
            <textarea id="line3" style="resize: none; height: 100px;"></textarea>
        </div>

        <div>
            <label for="line14" style="font-weight: bolder;">Component:</label>
            <select id="line14">
                <option value="AC SYSTEM">AC SYSTEM</option>
                <option value="ACCIDENT">ACCIDENT</option>
                <option value="BRAKE SYSTEM">BRAKE SYSTEM</option>
                <option value="COOLING SYSTEM">COOLING SYSTEM</option>
                <option value="DIFFERENTIAL & FINAL DRIVE">DIFFERENTIAL & FINAL DRIVE</option>
                <option value="DRIVE LINE & JOINT LINE">DRIVE LINE & JOINT LINE</option>
                <option value="ELECTRICAL SYSTEM">ELECTRICAL SYSTEM</option>
                <option value="ENGINE RELATED PART">ENGINE RELATED PART</option>
                <option value="ENGINE">ENGINE</option>
                <option value="FUEL SYSTEM">FUEL SYSTEM</option>
                <option value="GET">GET</option>
                <option value="HYDRAULIC SYSTEM">HYDRAULIC SYSTEM</option>
                <option value="MACHINE (MAIN FRAME & GUARD)">MACHINE (MAIN FRAME & GUARD)</option>
                <option value="OPTIONAL ACCESSORIES">OPTIONAL ACCESSORIES</option>
                <option value="OPTIONAL DEVICE">OPTIONAL DEVICE</option>
                <option value="PERIODICAL SERVICE / MAINTENANCE">PERIODICAL SERVICE / MAINTENANCE</option>
                <option value="STEERING SYSTEM">STEERING SYSTEM</option>
                <option value="SUSPENSION">SUSPENSION</option>
                <option value="TOP UP, OIL, WATER, GREASE">TOP UP, OIL, WATER, GREASE</option>
                <option value="TRANSMISSION & TORQUE CONVERTER, CLUTCH">TRANSMISSION & TORQUE CONVERTER, CLUTCH</option>
                <option value="UNDERCARRIAGE">UNDERCARRIAGE</option>
                <option value="WHEEL & TYRE">WHEEL & TYRE</option>
                <option value="WORK EQUIPMENT">WORK EQUIPMENT</option>
                <option value="CABIN GROUP">CABIN GROUP</option>
                <option value="ATTACHMENT">ATTACHMENT</option>
                <option value="AUTOLUBE SYSTEM">AUTOLUBE SYSTEM</option>
                <option value="INCIDENT">INCIDENT</option>
                <option value="COMMISSIONING">COMMISSIONING</option>
            </select>
        </div>

        <div>
            <label for="line4" style="font-weight: bolder;">B/D:</label>
            <div style="display: flex; flex-direction: row;">
                <input type="date" id="line4" style="margin: 10px;" />
                <input type="time" id="line11" style="margin: 10px;"/>
            </div>
        </div>

        <div>
            <label for="line5" style="font-weight: bolder;">Start:</label>
            <div style="display: flex; flex-direction: row;">
                <input type="date" id="line5" style="margin: 10px;" />
                <input type="time" id="line12" style="margin: 10px;"/>
            </div>
        </div>

        <div>
            <label for="line6" style="font-weight: bolder;">Ready:</label>
            <div style="display: flex; flex-direction: row;">
                <input type="date" id="line6" style="margin: 10px;" />
                <input type="time" id="line13" style="margin: 10px;"/>
            </div>
        </div>

        <div>
            <label for="line7" style="font-weight: bolder;">Activity:</label>
            <textarea id="line7" style="resize: none; height: 100px;"></textarea>
        </div>

        <div>
            <label for="line8" style="font-weight: bolder;">Status:</label>
            <select id="line8">
                <option value="RFU">RFU</option>
                <option value="B/D">B/D</option>
            </select>
        </div>

        <div>
            <label for="line9" style="font-weight: bolder;">MP:</label>
            <input type="text" id="line9" />
        </div>

        <div>
            <label for="line10" style="font-weight: bolder;">Pengawas:</label>
            <input type="text" id="line10" />
        </div>

        <div>
            <label for="photo" style="font-weight: bolder;">Attach Foto:</label>
            <input type="file" id="photo" accept="image/*" onchange="previewPhoto()" />
        </div>

        <div id="photoPreview" style="display: none;">
            <p style="font-weight: bolder; margin-top: 10px;">Preview Foto:</p>
            <img id="previewImage" style="max-width: 100%;" />
        </div>

        <div style="display: flex; justify-content: center; margin-top: 10px; margin-bottom: 10px;">
            <button type="submit">Send to WhatsApp</button>
        </div>
 
    </form>

    <script>
        function submitForm() {
            var lines = [
                "No. Unit: " + document.getElementById('line1').value,
                "HM/KM: " + document.getElementById('line2').value,
                "Problem: " + document.getElementById('line3').value,
                "Component: " + document.getElementById('line14').value,
                "B/D: " + document.getElementById('line4').value + " / " + document.getElementById('line11').value ,
                "Start: " + document.getElementById('line5').value + " / " + document.getElementById('line12').value ,
                "Ready: " + document.getElementById('line6').value + " / " + document.getElementById('line13').value,
                "Activity: " + document.getElementById('line7').value,
                "Status: " + document.getElementById('line8').value,
                "MP: " + document.getElementById('line9').value,
                "Pengawas: " + document.getElementById('line10').value
            ];

            var formattedMessage = lines.join('%0A%0A');
            AndroidInterface.shareToWhatsApp(formattedMessage);
        }
    </script>

<br><br><br><br><br>

</body>
</html>
