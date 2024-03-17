document.addEventListener("DOMContentLoaded", function() {
    const mapping = [
        ['PVP=', 'pvpCheckbox'],
        ['PauseEmpty=', 'pauseEmptyCheckbox'],
        ['GlobalChat=', 'globalChatCheckbox'],
        ['Open=', 'openCheckbox'],
        ['AutoCreateUserInWhiteList=', 'autoCreateUserCheckbox'],
        ['DisplayUserName=', 'displayUserNameCheckbox'],
        ['ShowFirstAndLastName=', 'showFirstAndLastNameCheckbox'],
        ['SafetySystem=', 'safetySystemCheckbox'],
        ['ShowSafety=', 'showSafetyCheckbox'],
        ['DoLuaChecksum=', 'doLuaChecksumCheckbox'],
        ['DenyLoginOnOverloadedServer=', 'denyLoginCheckbox'],
        ['Public=', 'publicCheckbox'],
        ['ConstructionPreventsLootRespawn=', 'constructionPreventsLootRespawnCheckbox'],
        ['DropOffWhiteListAfterDeath=', 'dropOffWhiteListAfterDeathCheckbox'],
        ['NoFire=', 'noFireCheckbox'],
        ['AnnounceDeath=', 'announceDeathCheckbox'],
        ['PlayerSafehouse=', 'playerSafehouseCheckbox'],
        ['AdminSafehouse=', 'adminSafehouseCheckbox'],
        ['SafehouseAllowTrepass=', 'safehouseAllowTrepassCheckbox'],
        ['SafehouseAllowFire=', 'safehouseAllowFireCheckbox'],
        ['SafehouseAllowLoot=', 'safehouseAllowLootCheckbox'],
        ['SafehouseAllowRespawn=', 'safehouseAllowRespawnCheckbox'],
        ['SafehouseAllowNonResidential=', 'safehouseAllowNonResidentialCheckbox'],
        ['AllowDestructionBySledgehammer=', 'allowDestructionBySledgehammerCheckbox'],
        ['SledgehammerOnlyInSafehouse=', 'sledgehammerOnlyInSafehouseCheckbox'],
        ['KickFastPlayers=', 'kickFastPlayersCheckbox'],
        ['DiscordEnable=', 'discordEnableCheckbox'],
        ['AllowCoop=', 'allowCoopCheckbox'],
        ['SleepAllowed=', 'sleepAllowedCheckbox'],
        ['SleepNeeded=', 'sleepNeededCheckbox'],
        ['KnockedDownAllowed=', 'knockedDownAllowedCheckbox'],
        ['SneakModeHideFromOtherPlayers=', 'sneakModeHideFromOtherPlayersCheckbox'],
        ['SteamVAC=', 'steamVACCheckbox'],
        ['UPnP=', 'upnpCheckbox'],
        ['VoiceEnable=', 'voiceEnableCheckbox'],
        ['Voice3D=', 'voice3DCheckbox'],
        ['LoginQueueEnabled=', 'loginQueueEnabledCheckbox'],
        ['PlayerRespawnWithSelf=', 'playerRespawnWithSelfCheckbox'],
        ['PlayerRespawnWithOther=', 'playerRespawnWithOtherCheckbox'],
        ['DisableSafehouseWhenPlayerConnected=', 'disableSafehouseWhenPlayerConnectedCheckbox'],
        ['Faction=', 'factionCheckbox'],
        ['DisableRadioStaff=', 'disableRadioStaffCheckbox'],
        ['DisableRadioAdmin=', 'disableRadioAdminCheckbox'],
        ['DisableRadioGM=', 'disableRadioGMCheckbox'],
        ['DisableRadioOverseer=', 'disableRadioOverseerCheckbox'],
        ['DisableRadioModerator=', 'disableRadioModeratorCheckbox'],
        ['DisableRadioInvisible=', 'disableRadioInvisibleCheckbox'],
        ['PerkLogs=', 'perkLogsCheckbox'],
        ['AllowNonAsciiUsername=', 'allowNonAsciiUsernameCheckbox'],
        ['BanKickGlobalSound=', 'banKickGlobalSoundCheckbox'],
        ['RemovePlayerCorpsesOnCorpseRemoval=', 'removePlayerCorpsesOnCorpseRemovalCheckbox'],
        ['TrashDeleteAll=', 'trashDeleteAllCheckbox'],
        ['PVPMeleeWhileHitReaction=', 'pvpMeleeWhileHitReactionCheckbox'],
        ['MouseOverToSeeDisplayName=', 'mouseOverToSeeDisplayNameCheckbox'],
        ['HidePlayersBehindYou=', 'hidePlayersBehindYouCheckbox'],
        ['PlayerBumpPlayer=', 'playerBumpPlayerCheckbox'],
        ['BackupsOnStart=', 'backupsOnStartCheckbox'],
        ['BackupsOnVersionChange=', 'backupsOnVersionChangeCheckbox'],
        ['AntiCheatProtectionType1=', 'antiCheatProtectionType1Checkbox'],
        ['AntiCheatProtectionType2=', 'antiCheatProtectionType2Checkbox'],
        ['AntiCheatProtectionType3=', 'antiCheatProtectionType3Checkbox'],
        ['AntiCheatProtectionType4=', 'antiCheatProtectionType4Checkbox'],
        ['AntiCheatProtectionType5=', 'antiCheatProtectionType5Checkbox'],
        ['AntiCheatProtectionType6=', 'antiCheatProtectionType6Checkbox'],
        ['AntiCheatProtectionType7=', 'antiCheatProtectionType7Checkbox'],
        ['AntiCheatProtectionType8=', 'antiCheatProtectionType8Checkbox'],
        ['AntiCheatProtectionType9=', 'antiCheatProtectionType9Checkbox'],
        ['AntiCheatProtectionType10=', 'antiCheatProtectionType10Checkbox'],
        ['AntiCheatProtectionType11=', 'antiCheatProtectionType11Checkbox'],
        ['AntiCheatProtectionType12=', 'antiCheatProtectionType12Checkbox'],
        ['AntiCheatProtectionType13=', 'antiCheatProtectionType13Checkbox'],
        ['AntiCheatProtectionType14=', 'antiCheatProtectionType14Checkbox'],
        ['AntiCheatProtectionType15=', 'antiCheatProtectionType15Checkbox'],
        ['AntiCheatProtectionType16=', 'antiCheatProtectionType16Checkbox'],
        ['AntiCheatProtectionType17=', 'antiCheatProtectionType17Checkbox'],
        ['AntiCheatProtectionType18=', 'antiCheatProtectionType18Checkbox'],
        ['AntiCheatProtectionType19=', 'antiCheatProtectionType19Checkbox'],
        ['AntiCheatProtectionType20=', 'antiCheatProtectionType20Checkbox'],
        ['AntiCheatProtectionType21=', 'antiCheatProtectionType21Checkbox'],
        ['AntiCheatProtectionType22=', 'antiCheatProtectionType22Checkbox'],
        ['AntiCheatProtectionType23=', 'antiCheatProtectionType23Checkbox'],
        ['AntiCheatProtectionType24=', 'antiCheatProtectionType24Checkbox']
    ];

    fetch('/ini/data.txt')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(data => {
            const lines = data.split('\n');
            mapping.forEach(([searchString, checkboxId]) => {
                const line = lines.find(line => line.startsWith(searchString));
                if (line) {
                    const value = line.split('=')[1].trim();
                    const checkbox = document.getElementById(checkboxId);
                    if (checkbox) {
                        checkbox.checked = value === 'true';
                    }
                }
            });
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
});
